<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $category = [
        'id_laptop'     => 'required',
        'nama_laptop'     => 'required',
        'merk_laptop'     => 'required',
        'spek'     => 'required'
    ];
     
    public $category_errors = [
        'id_laptop' => [
            'required'    => 'Nama category wajib diisi.',
        ],
        'nama_laptop' => [
            'required'    => 'Nama category wajib diisi.',
        ],
        'merk_laptop' => [
            'required'    => 'Nama category wajib diisi.',
        ],
        'spek'    => [
            'required' => 'Status category wajib diisi.',
        ],
        
    ];

}
