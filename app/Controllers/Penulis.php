<?php

namespace App\Controllers;

use App\Models\PenulisModel;

class Penulis extends BaseController
{
    protected $penulis;

    public function __construct()
    {
        $this->penulis = new PenulisModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        $builder = $this->penulis;

        if ($keyword) {
            $builder = $builder->like('nama_penulis', $keyword);
        }

        $data['penulis'] = $builder->paginate(10);
        $data['pager'] = $this->penulis->pager;

        return view('penulis/index', $data);
    }

    public function create()
    {
        return view('penulis/create');
    }

    public function store()
    {
        $this->penulis->save([
            'nama_penulis' => $this->request->getPost('nama_penulis')
        ]);

        return redirect()->to('/penulis')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['penulis'] = $this->penulis->find($id);
        return view('penulis/edit', $data);
    }

    public function update($id)
    {
        $this->penulis->update($id, [
            'nama_penulis' => $this->request->getPost('nama_penulis')
        ]);

        return redirect()->to('/penulis')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        if ($id > 0) {
            $this->penulis->delete($id);
        }

        return redirect()->to('/penulis')->with('success', 'Data berhasil dihapus');
    }
}
