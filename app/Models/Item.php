<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['completed'];
    /**
     * Finds a given item in the database.
     */
    // public static function find($id)
    // {
    //     return DB::table('items')
    //     ->where('id', '=', $id);
    // }
}
