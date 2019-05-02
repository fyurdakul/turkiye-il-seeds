<?php

namespace App\Models\firma;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class semtler extends Model
{
    use SoftDeletes;
    protected $table = 'lara_semt';
    protected $guarded = [];
    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
}
