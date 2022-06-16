<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'department_name',
      
    ];

   
      /**
     * get Table Name
     *
     * @return void
     */
    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
