<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crudcontroller extends Controller
{
    
public function main()
    {
        return view('welcome');
    }



public function create ()
    {
        return view('CRUD.create');
    }



public function store(Request $request)
    {

DB::table('items')->insert([

'name'=>$request['name'],
'category'=>$request['category'],
'brand'=>$request['brand']


]);



return redirect()->route('index')->with('success', 'Item added successfully!');
     
    }



public function index()
    {
       
$data = DB::table('items')->get();

return view('Crud.index', ['data' => $data]);


    }



public function view( string $id){

$data = DB::table('items')->where('id', $id)->get()->first();

return view('Crud.view', ['data' => $data]);


}




public function edit(string $id)
    {
    $data = DB::table('items')->where('id', $id)->get()->first();

return view('Crud.edit', ['data' => $data]);
    }


    public function update(request $request, string $id)
    {

    DB::table('items')->where('id', $id)->update([

'name'=>$request['name'],
'category'=>$request['category'],
'brand'=>$request['brand']


]);


return redirect()->route('index')->with('success', 'Item updated successfully!');

    }


// public function destroy(string $id)
//     {
//         DB::table('items')->where('id', $id)->delete();

//         return redirect()->route('index')->with('success', 'Item deleted successfully!');
//     }

}
