<?php

namespace App\Http\Controllers;
use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        $datas = Biodata::all();
        return view('admin.index', compact('datas'));
    }

    public function create()
    {
    	return view('admin.create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(),[
    		'name' => 'required',
    		'jk' => 'required',
    		'birthdate' => 'required|date|before:-17 years',
    		'phone' => 'required|regex:/(08)[0-9]{10}/',
    		'email' => 'required|unique:biodata,email',
    		'address' => 'required',
    	]);

    	$data = new Biodata;
    	$data->name = $request['name'];
    	$data->jk = $request['jk'];
    	$dates = strtotime($request['birthdate']);
    	$data->birthdate = date('Y-m-d',$dates);
    	$data->phone = $request['phone'];
    	$data->email = $request['email'];
    	$data->address = $request['address'];
    	$data->save();      
    	return redirect('admin');  
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function show($id)
    {
        $datas = Biodata::find($id);
        return view('admin.index', compact('datas'));
    }

    public function destroy($id)
    {
        $datas = Biodata::find($id);
        $datas->delete();
        return redirect()->back();  
    }

}
