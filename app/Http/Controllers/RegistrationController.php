<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Exports\ExportUsers;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('registration');
    }

    public function store(Request $request){
        //dd($request->all());
       
       $this->validate($request, [
             'fullName' => 'required|max:255',
             'email' =>'required|unique|registrations|email',
            'identification' =>'required|max:11|min:6',
             'address' => 'required|max:255',
             'comments' => 'required|max:255'
            
        ]);
        $registration = Registration::create($request->all());
      

        return 'GRACIAS POR REGISTRARSE';
    }
   
    public function show(){
      
    
        $mensajes= Registration::all();
        return view('home')->with('mensajes',$mensajes);
    }  
    
    public function export() 
    {
        return Excel::download(new ExportUsers, 'users.xlsx');
    }
    
}
