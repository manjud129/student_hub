<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'programs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'link',
        'deadline',
        'source'
    ];

    protected $useTimestamps = true;
}