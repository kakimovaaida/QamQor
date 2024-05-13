<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\HumanRequests;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(){
        $requests= HumanRequests::all();
        return view('adm.requests.index',['requests'=>$requests]);
    }

    public function destroy(HumanRequests $req){
        $req->delete();
        return redirect()->route('adm.requests.index');
    }
}
