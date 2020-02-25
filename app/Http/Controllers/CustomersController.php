<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $activeCustomer = Customer::whereStatus(1)->get();
        $inActiveCustomer = Customer::whereStatus(0)->get();
        

        return view('internals.customers',compact('activeCustomer','inActiveCustomer'));
    }

    public function store(Request $request){
         
            

       $rules = ['name'=>'required|min:3' ,
                 'email' => 'required|email',
                 'status' => 'required'
                ];       

        $this->validate($request,$rules);
        
        //** With Out Fillable  ** 
         $customer = new Customer();
         $customer->name = $request->name;
         $customer->email = $request->email;
         $customer->status = $request->status;
         $customer->save();
       

        // $input =  $request->all(); 

        // Customer::create($input);
        
        return back();
    }
}
