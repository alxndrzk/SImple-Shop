<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    // protected $fillable = [
    //     'title',
    //     'description',
    // ]; //data yang boleh diisi dengan form, tetapi selain ini tidak boleh

    protected $guarded = ['id']; //data ini gaboleh diisi dengan form, tetapi yang lain boleh
}
