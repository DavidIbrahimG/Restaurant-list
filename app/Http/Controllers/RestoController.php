<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    //
    function index (){
        return view('home'); 
    }
    function list (){
        $data = Restaurant::all();
        return view('list',["datas"=>$data]);
    }
    function add(Request $request){
        $add = New Restaurant;
        $add->name = $request->name;
        $add->address = $request->address;
        $save = $add->save();

        if($save){
            return back()->with('success', 'Restaurant & Address have been added successfully');
        }else{
            return back()->with('fail','Something went wrong, try agian later');
        }
        
    }

    function delete($id){
        $data=Restaurant::find($id);
        $data->delete();
        return redirect('list');
    }

    function edit($id){
        $data = Restaurant::find($id);
        return view('edit', ["datas"=>$data]);
    }
    function update(Request $request){

        $data = Restaurant::find($request->id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->save();
        return redirect('list');

    }

}
