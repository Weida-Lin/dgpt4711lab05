<?php
namespace App\Models;

/**
 * SimpleModel persisted as CSV document
 *  
 */
class Places extends Simple\CSVModel
{
    protected $origin = WRITEPATH . 'data/Places.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}