<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\HumanRequests;
use App\Models\Service;
use App\Models\Category;
use App\Models\Type;
use App\Models\TypeCat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $allService = Service::all();
        $randomServices = $allService->shuffle()->take(3);
        return view('services.index',['services'=>$allService, 'randomServices' => $randomServices,'categories'=>Category::all(),'typeCats' => TypeCat::all(),'types' => Type::all()],);
    }

    public function ServicesByCat(Category $category)
    {
        return view('catPages.test',['services'=>$category->services,'types' =>TypeCat::all(),'categories'=>Category::all()]);
    }

    public function CatsByType(Type $type)
    {
        return view('catPages.second',['categories'=>$type->categories,'types'=>Type::all(),'typeCats'=>TypeCat::all()]);
    }

    public function TypesByTypeCat(TypeCat $typeCat)
    {
        return view('catPages.third',['types'=>$typeCat->types,'typeCats'=>TypeCat::all()]);
    }

    public function create()
    {
        return view('services.create',['categories'=>Category::all(),'types'=>Type::all()]);
    }

    public function store(Request $request)
    {
        $validated= $request->validate([
            'service_name' => 'required|max:255',
            'description'=>'required',
            'img' => 'required',
            'category_id' => 'required|numeric|exists:categories,id',
        ]);
        $fileName=time().$request->file('img')->getClientOriginalName();
        $image_path = $request->file('img')->storeAs('services',$fileName,'public');
        $validated['services'] = '/storage/'.$image_path;
        Service::create($validated);
        return redirect(route('services.index'))->with('message','Successfully');
    }

    public function show(Service $service)
    {
        return view('services.show',['services'=>$service,'categories' => Category::all()]);
    }


    public function edit(Service $service)
    {
        return view('services.edit',['services'=>$service, 'categories'=>Category::all()]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update([
            'service_name'=>$request->input('service_name'),
            'description'=>$request->input('description'),
            'category_id'=>$request->category_id,
        ]);
        return redirect(route('services.index'))->with('message','Courses Updated Sucsessfully');
    }


    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('services.index'))->with('message','Products deleted sucsessfully');
    }

    public function help_requests(Request $request)
    {
        $validated= $request->validate([
            'title' => 'required|max:255',
            'description'=>'required',
            'phone' => 'required',
            'name' => 'required',
        ]);
        HumanRequests::create($validated);
        return back()->with('message','Successfully');
    }
    public function bankFund()
    {
        return view('services.fund');
    }

    public function about_us()
    {
        return view('services.about');
    }

    public function employee(Request $req)
    {
        $validated= $req->validate([
            'name' => 'required|max:255',
            'surname'=>'required',
            'email' => 'required',
            'age' => 'required|numeric',
            'content' => 'required',
            'phone' => 'required',
        ]);
        Employee::create($validated);
        return back()->with('message','Successfully');
    }
    public function wantHelp()
    {
        return view('help.want_help');
    }
    public function wantToHelp()
    {
        return view('help.want_to_help');
    }
}

