<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudModelController extends Controller
{
    public function index()
    {
        $donner = CrudModel::all();
        return view('index', compact('donner'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $item = $request->validate([
            'name' => "required|min:3",
            'email' => "required|max:100|email",
            'image' => "required|image|mimes:png,jpg,jpeg"
        ]);
        if ($request->hasFile('image')) {
           
            $item['image']=$request->file("image")->store("images","public");
            }else{
                $item['image']=null;
            }
          //  $image = $request->file('image');
           // $imageName = time() . '.' . $image->getClientOriginalExtension();
           // $image->move(public_path('image'), $imageName);
           // $item['image'] = $imageName;
        
        CrudModel::create($item);
        return redirect()->route('index');
    }

    public function show($id)
    {
        $element=CrudModel::find($id);
        return view('show',compact('element'));
    }

    public function delete($id)
    {
        $element=CrudModel::find($id);
        $element->delete();
        return redirect()->route('index');
    }

   
    public function edit($id)
    {
        $element=CrudModel::find($id);
        return view('edit',compact('element'));
    }

    public function update($id,Request $request)
    {
        $element=CrudModel::find($id);
        $item = $request->validate([
            'name' => "required|min:3",
            'email' => "required|max:100|email",
        ]);
        $element->update($item);
        return redirect()->route('index');
    }

}
