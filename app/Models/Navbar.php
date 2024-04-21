<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navbar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'facebook',
        'linkedin',
        'instagram',
        'icon',
        'status'
    ];

    public function image() {
        $image = TemporaryFile::where('id', $this->icon)->first();
        if($image){
            return 'storage/orders/temp/' . $image->folder . '/' . $image->filename;
        }
    }
}
