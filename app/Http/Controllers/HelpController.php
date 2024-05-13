<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
{
    public function index()
    {
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
            'help_title'=>$request->input('help_title'),
            'description'=>$request->input('description'),
            'category_id'=>$request->type_service_id,
        ]);
        return redirect(route('services.index'))->with('message','Courses Updated Sucsessfully');
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('courses.index'))->with('message','Products deleted sucsessfully');
    }

}
