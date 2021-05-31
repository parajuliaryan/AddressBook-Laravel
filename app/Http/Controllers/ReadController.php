<?php

namespace App\Http\Controllers;

use App\Models\Read;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index(){
        $readValues = Read::all();

        return view('dashboard', compact('readValues'));
    }

    public function edit(Read $readValue){
        return view('editBook', compact('readValue'));
    }

    public function update(Read $readValue){

        request()->validate([
            'name'=>'required',
            'address'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required'
        ]);

       $readValue->update([
            'name'=>request('name'),
            'address'=>request('address'),
            'phoneNumber'=>request('phoneNumber'),
            'email'=>request('email')
       ]);

       return redirect('/dashboard');
    }

    public function create(){
        return view('create');
    }

    public function addCreate(){
        request()->validate([
            'name'=>'required',
            'address'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required'
        ]);

        Read::create([
            'name'=>request('name'),
            'address'=>request('address'),
            'phoneNumber'=>request('phoneNumber'),
            'email'=>request('email')
        ]);

        return redirect('/dashboard');
    }

    public function destroy(Read $readValue){
            $readValue->delete();
    }
}
