<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulation extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $table = 'regulation';

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->id = IdGenerator::generate(['table' => 'regulation', 'length' => 5, 'prefix' => 'RG', 'reset_on_prefix_change'=>true]);
    //     });
    // }
}
