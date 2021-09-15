<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelUser extends Model
{
    protected $table = 'user';
    protected $useTimestamps = false;
    protected $allowedFields = ['username', 'password'];
    protected $primaryKey = 'idUser';
    // public function getAuthPassword()
    // {
    //     return $this->password;
    //     //$this->load->model('Modeluser');
    // }
}
