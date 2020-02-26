<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
       $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }

    public function create(){       
        $company = Company::pluck('name','id')->all();
        return view('customers.create',compact('company'));
    }

    public function show(Customer $customer){
      //  $customer = Customer::find($id);

        return view('customers.show',compact('customer'));

    }

    public function edit(Customer $customer){
      // $customer = Customer::findORFail($customer);
       $company = Company::pluck('name','id')->all();

       return view('customers.edit',compact('customer','company'));
    }

    public function update(Customer $customer){
        $rules = ['name'=>'required|min:3' ,
        'email' => 'required|email',
        'status' => 'required',
        'company_id' => 'required',
        ];   

        $input = request()->validate($rules);             
        $customer->update($input);        
        return redirect('customer/'.$customer->id);
    }

    public function store(Request $request){
       $rules = ['name'=>'required|min:3' ,
                 'email' => 'required|email',
                 'status' => 'required',
                 'company_id' => 'required',
                 ];   

                $input =  $this->validate($request,$rules);                 
                
                Customer::create($input);        
        return redirect('customer');
    }


    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('customer');
    }
}
