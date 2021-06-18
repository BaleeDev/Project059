<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    protected $primaryKey = "id_059";
    protected $table = 'midsemesters';
    protected $fillable = ['kolom_nim', 'kolom_nama', 'kolom_umur', 'kolom_alamat'];
}
