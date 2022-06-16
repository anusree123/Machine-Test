<?php

namespace App\Http\Helpers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DesignationHelper
{
    public static function getDesignation($userId)
    {
       
        $designation =  DB::table(Designation::getTableName() . ' as d')
            ->join(User::getTableName() . ' as u', 'u.designation_id', '=', 'd.id')
            ->where('u.id', $userId)
           ->pluck('d.designation_name')->toArray();
          $string = implode(" ",$designation);
          return $string;

    }

    public static function getDepartment($userId)
    {
       
        $department =  DB::table(Department::getTableName() . ' as d')
            ->join(User::getTableName() . ' as u', 'u.department_id', '=', 'd.id')
            ->where('u.id', $userId)
           ->pluck('d.department_name')->toArray();
           $string = implode(" ",$department);
           return $string;

       
     }


  

   

}
