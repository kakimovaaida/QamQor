<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\HumanRequests;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){
        $requests = Employee::all();
        return view('adm.employee.index',['requests'=>$requests]);
    }

    public function destroy(Employee $req){
        $req->delete();
        return redirect()->route('adm.employee.index');
    }
}
