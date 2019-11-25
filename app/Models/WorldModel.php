<?php

namespace App\Models;

use CodeIgniter\Model;

class WorldModel extends Model //\CodeIgniter\Model
{
        protected $table      = 'city';
        protected $primaryKey = 'ID';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['Name', 'CountryCode', 'District', 'Population'];

        protected $useTimestamps = false;

        protected $validationRules    = [
                'Name' => 'required|is_unique[city.Name]|min_length[3]'
        ];
        protected $validationMessages = [
                'Name' => [
                        'is_unique' => 'Este valor esta repetido'
                ],
        ];
        protected $skipValidation     = false;
}
