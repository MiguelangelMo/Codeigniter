<?php

namespace App\Models;

use CodeIgniter\Model;

class WorldCodeModel extends Model //\CodeIgniter\Model
{
    protected $table      = 'country';
    protected $primaryKey = 'Code';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'Code',
        'Name',
        'Continent',
        'Region',
        'SurfaceArea',
        'IndepYear',
        'Population',
        'LifeExpectancy',
        'GNP',
        'GNPOld',
        'LocalName',
        'GovernmentForm',
        'HeadOfState',
        'Capital',
        'Code2'
    ];

    protected $useTimestamps = false;

    protected $validationRules    = [
        'Code' => 'required|is_unique[country.Code]|alpha_numeric_space|min_length[1]',
        'Name' => 'required|alpha_space|min_length[3]',
        'Population' => 'required|integer'
    ];
    protected $validationMessages = [
        'Code' => [
            'is_unique' => 'Este valor esta repetido'
        ],
        'Name' => [
            'required' => 'Este valor no puede estar en blanco'
        ]
    ];
    protected $skipValidation     = false;
}
