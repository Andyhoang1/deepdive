<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparatie extends Model
{
    use HasFactory;
    protected $fillable = ['naam', 'adres', 'email', 'telefoonnummer',  'created_by', 'updated_by'];
    protected $table = 'reparatie';

}
