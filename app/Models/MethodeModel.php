<?php

namespace App\Models;

use CodeIgniter\Model;

class MethodeModel extends Model {
    protected $table = 'methode';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['methode_name'];

}
