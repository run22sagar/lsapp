<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string|null title
 * @property array|string|null body
 */
class Post extends Model
{
    // Table Name
    protected $table='posts';
    //Primary Key
    public $primaryKey='id';
    //Time Stamps
    public $timestamps=true;

}

