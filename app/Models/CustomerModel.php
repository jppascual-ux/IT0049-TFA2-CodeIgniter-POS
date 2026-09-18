<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Wraps the `customers` table.
 */
class CustomerModel extends Model
{
    protected $table         = 'customers';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = ['full_name', 'email', 'phone', 'created_at'];
    protected $useTimestamps = false;
}
