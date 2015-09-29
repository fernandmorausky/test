<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('index', ['users' => $users]);
    }
    public function contacto(){
        return view('contacto');
    }
    public function reviews(){
        return view('reviews');
    }
    public function test1(){
        return view('user/test');
        //echo "Hola Mundo666";
    }
     public function EMPLOYEES()
    {
        //var_dump(route('EMPLOYEE'));
        $EMPLOYEE = DB::select('select * from EMPLOYEE');
        return view('EMPLOYEE/EMPLOYEES', ['EMPLOYEE' => $EMPLOYEE]);
    }    

    public function ViewOneUser($EmployeeCode='SYSADMIN'){
         $EMPLOYEE = DB::table('EMPLOYEE')->where('EmployeeCode','=', $EmployeeCode)->get();
        return view('EMPLOYEE/OneEMPLOYEE', ['EMPLOYEE' => $EMPLOYEE]);
    }
    public function loginUser(){
        //var_dump(route('EMPLOYEES'));
        return view('EMPLOYEE/login');
    }


}
