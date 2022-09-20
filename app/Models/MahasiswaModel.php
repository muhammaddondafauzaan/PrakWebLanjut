<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['npm', 'nama'];

    protected $useTimeStamp = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}