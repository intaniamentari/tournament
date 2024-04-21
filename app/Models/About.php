<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'sub_title',
        'text',
        'footer',
        'image',
        'status'
    ];

    public function image() {
        $image = TemporaryFile::where('id', $this->image)->first();
        if($image){
            return 'storage/orders/temp/' . $image->folder . '/' . $image->filename;
        }
    }
}
