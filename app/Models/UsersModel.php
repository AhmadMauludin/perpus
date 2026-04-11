<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'username', 'password', 'role', 'foto', 'status'];

    public function getUsersByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
