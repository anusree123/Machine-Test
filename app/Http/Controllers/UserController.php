<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\DesignationHelper;




class UserController extends Controller
{
   /**
    * list the users in user table
    */
   public function index()
   {
   $users = User::all();
    return view('index',['users'=>$users,'layout'=>'index']);
   }

  
/**
 * function to search user with name , designation and department
 */
   public function userAction(Request $request)
  {
   
    if($request->ajax())
     {
         $output = '';
         $query = $request->get('query');
         $data = DB::table(User::getTableName() . ' as u')
            ->join(Designation::getTableName() . ' as d', 'u.designation_id', '=', 'd.id')
            ->join(Department::getTableName() . ' as dp', 'u.department_id', '=', 'dp.id')
            ->select('u.id', 'u.name', 'd.designation_name', 'dp.department_name')
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('designation_name', 'like', '%'.$query.'%')
            ->orWhere('department_name', 'like', '%'.$query.'%')
            ->get();
         $total_row = $data->count();
        if($total_row > 0)
         {

           foreach($data as $row)
             {
              $output .= '
   
                 <div class="col-md-6">
                 <div class="card">
                 <h5>'.$row->name.'</h5>
                <h6>'. DesignationHelper::getDesignation($row->id) .'</h6>
                <p>'. DesignationHelper::getDepartment($row->id) .'</p>
              </div>
              </div>
              ';
           }
        }
   else
     {
        $output = '
        <div class="col-md-6">
        <div class="card">
      
         <p>Whoops...No Matches Found!!!</p>
        
        </div>
        </div>
       ';
     }
      $data = array(
     'table_data'  => $output,
     'total_data'  => $total_row
   );

   return json_encode($data);
   }
}

}


