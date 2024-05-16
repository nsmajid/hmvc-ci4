<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table      = 'jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'jabatan',
        'gaji'
    ];
    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
