<?php

namespace App\Models;

use drh2so4\Thumbnail\Traits\Thumbnail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryInvoice extends Model
{
    use HasFactory;
    use Thumbnail;

    protected $fillable = ['folder','filename', 'used'];
}
