<?php namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken as SanctumToken;
use MongoDB\Laravel\Eloquent\DocumentModel;

class PersonalAccessToken extends SanctumToken
{
    use DocumentModel;

    /**
     * Llave primaria
     */
    protected $primaryKey = '_id';

    /**
     * Tipo de llave
     */
    protected $keyType = 'string';
}