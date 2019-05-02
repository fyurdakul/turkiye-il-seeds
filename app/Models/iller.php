<?php

namespace App\Models\firma;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class iller extends Model
{
    use SoftDeletes;
    protected $table = 'lara_il';
    protected $guarded = [];
    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
}
