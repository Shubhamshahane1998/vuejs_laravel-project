<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\main;
use App\Models\RoleType;
use App\Models\User;
use App\Models\UserRoles;
use Auth;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use JWTAuth;
use Storage;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Common\Services\EmailService;
use File;
use Illuminate\Validation\Rule;
use Validator;
use DB;
use Crypt;
use App\Http\Resources\Role as RoleResource;

class new_controller extends Controller
{
    public function Insert_data(Request $request)
    {
        // $data=$request::all();
        // return $data;

        // $json_arr = [];
        // $json_arr = main::all();
        // $json_arr[['name']]=$request->name;
        // $json_arr['email']=$request->email;
        // $json_arr['age']=$request->age;
        // $json_arr['gender']=$request->gender;
        // $json_arr['department']=$request->department;
        // $json_arr['designation']=$request->designation;
        // $json_arr->save();
        $data = json_decode($request->input('newData'));
        $info = new main;
        // $info['name']=$data->name;
        // $info['email']=$data->email;
        // $info['age']=$data->age;            
        // $info['gender']=$data->gender;
        // $info['department']=$data->department;
        // $info['designation']=$data->designation;
        $info->name = $data->name;
        $info->email = $data->email;
        $info->age = $data->age;
        $info->gender = $data->gender;
        $info->department = $data->department;
        $info->designation = $data->designation;
        $info->save();
        return response()->json($info);
        // return $info;

    }
    public function show()
    {
        // $data = main::all()
        $data = main::orderBy('name', 'ASC')->get();

        // dd($data);
        return response()->json($data);
        // return $data;

    }

    public function edit_data($id)
    {
        $info = main::find($id);
        return response()->json($info);
    }
    public function update_data(Request $request)
    {
        $id = [];
        $data = json_decode($request->input('newData'));
        $id = $data->Id;
        $info['name'] = $data->name;
        $info['email'] = $data->email;
        $info['age'] = $data->age;
        $info['gender'] = $data->gender;
        $info['department'] = $data->department;
        $info['designation'] = $data->designation;
        $result = main::where('Id', $id)->update($info);

        if ($result) {
            $data = "Record Updated successfully";
            return response()->json($data);
        } else {
            $data = "Error Found";
            return response()->json($data);
        }
        // $info = new main;
        // $info->id = $data->id;
        // $info->name = $data->name;
        // $info->email = $data->email;
        // $info->age = $data->age;
        // $info->gender = $data->gender;
        // $info->department = $data->department;
        // $info->designation = $data->designation;
        // return response()->json($info);
    }

    public function delete_data($id)
    {
        $data = main::where('Id', $id)->delete();
        if ($data) {
            $data = "Record Deleted Successfully";
            return  response()->json($data);
        } else {
            $data = "Record Deleted Successfully";
            return  response()->json($data);
        }
    }
    public function developer_data($first)
    {
        if ($first == 'All') {
            $info = main::orderBy('name', 'ASC')->get();
            return  response()->json($info);
        }
         else {
            $info = main::where('department', $first)->orderBy('name', 'ASC')->get();
            return  response()->json($info);
        }
        //  }
        // $info = main::all()
        // ->where('department',$first);
        // // ->orWhere('department','like','%'.$front.';%');
        // // $info = main::where('department',$front)->all();
        //     return  response()->json($info);

        // return  response()->json($info);

        // dd($info);
    }
}
