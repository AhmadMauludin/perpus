<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $buku;
    protected $db;

    public function __construct()
    {
        $this->buku = new BukuModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        $builder = $this->db->table('buku');
        $builder->select('
            buku.*,
            kategori.nama_kategori,
            penulis.nama_penulis,
            penerbit.nama_penerbit,
            rak.nama_rak,
            rak.lokasi
        ');
        $builder->join('kategori', 'kategori.id_kategori = buku.id_kategori', 'left');
        $builder->join('penulis', 'penulis.id_penulis = buku.id_penulis', 'left');
        $builder->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit', 'left');
        $builder->join('buku_rak', 'buku_rak.id_buku = buku.id_buku', 'left');
        $builder->join('rak', 'rak.id_rak = buku_rak.id_rak', 'left');

        if ($keyword) {
            $builder->like('buku.judul', $keyword);
        }

        $data['buku'] = $builder->get()->getResultArray();

        return view('buku/index', $data);
    }

    public function create()
    {
        $data['kategori'] = $this->db->table('kategori')->get()->getResultArray();
        $data['penulis'] = $this->db->table('penulis')->get()->getResultArray();
        $data['penerbit'] = $this->db->table('penerbit')->get()->getResultArray();
        $data['rak'] = $this->db->table('rak')->get()->getResultArray();

        return view('buku/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();

        $this->buku->insert($data);
        $id_buku = $this->buku->getInsertID();

        $this->db->table('buku_rak')->insert([
            'id_buku' => $id_buku,
            'id_rak' => $data['id_rak']
        ]);

        return redirect()->to('/buku');
    }

    public function detail($id)
    {
        $builder = $this->db->table('buku');
        $builder->select('
            buku.*,
            kategori.nama_kategori,
            penulis.nama_penulis,
            penerbit.nama_penerbit,
            rak.nama_rak,
            rak.lokasi
        ');
        $builder->join('kategori', 'kategori.id_kategori = buku.id_kategori', 'left');
        $builder->join('penulis', 'penulis.id_penulis = buku.id_penulis', 'left');
        $builder->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit', 'left');
        $builder->join('buku_rak', 'buku_rak.id_buku = buku.id_buku', 'left');
        $builder->join('rak', 'rak.id_rak = buku_rak.id_rak', 'left');
        $builder->where('buku.id_buku', $id);

        $data['buku'] = $builder->get()->getRowArray();

        return view('buku/detail', $data);
    }

    public function edit($id)
    {
        $data['buku'] = $this->buku->find($id);
        $data['kategori'] = $this->db->table('kategori')->get()->getResultArray();
        $data['penulis'] = $this->db->table('penulis')->get()->getResultArray();
        $data['penerbit'] = $this->db->table('penerbit')->get()->getResultArray();
        $data['rak'] = $this->db->table('rak')->get()->getResultArray();

        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();

        $this->buku->update($id, $data);

        $this->db->table('buku_rak')
            ->where('id_buku', $id)
            ->update(['id_rak' => $data['id_rak']]);

        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->buku->delete($id);
        return redirect()->to('/buku');
    }

    public function print()
    {
        $data['buku'] = $this->db->table('buku')
            ->select('buku.*, kategori.nama_kategori, penulis.nama_penulis, penerbit.nama_penerbit')
            ->join('kategori', 'kategori.id_kategori = buku.id_kategori', 'left')
            ->join('penulis', 'penulis.id_penulis = buku.id_penulis', 'left')
            ->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit', 'left')
            ->get()->getResultArray();

        return view('buku/print', $data);
    }

    public function wa($id)
    {
        $buku = $this->detailData($id);

        $pesan = "DATA BUKU\n\n";
        foreach ($buku as $key => $value) {
            $pesan .= strtoupper($key) . ": " . $value . "\n";
        }

        return redirect()->to("https://wa.me/6285175017991?text=" . urlencode($pesan));
    }

    private function detailData($id)
    {
        return $this->db->table('buku')
            ->select('buku.*, kategori.nama_kategori, penulis.nama_penulis, penerbit.nama_penerbit')
            ->join('kategori', 'kategori.id_kategori = buku.id_kategori', 'left')
            ->join('penulis', 'penulis.id_penulis = buku.id_penulis', 'left')
            ->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit', 'left')
            ->where('buku.id_buku', $id)
            ->get()->getRowArray();
    }
}
