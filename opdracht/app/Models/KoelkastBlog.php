<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoelkastBlog extends Model
{
    use HasFactory;
    protected $fillable = ['merk', 'beschrijving', 'artikelnummer', 'prijs', 'afmetingen', 'aantal', 'inhoud', 'created_by', 'updated_by'];
    protected $table = 'koelkast_blog';
}
