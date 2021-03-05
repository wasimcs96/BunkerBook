<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pdfdocs extends Model
{
    protected $table = 'pdf_docs';

    protected $fillable = ['file'];
}
