<?php
namespace App\Models;

/**
 * SimpleModel persisted as CSV document
 *  
 */
class Places extends Simple\CSVModel
{
    protected $origin = WRITEPATH . 'data/Places2.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}