<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\employeeValidation;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees=employee::with('company')->get(['id','firstName','lastName','company_id','email','phone']);
        return view('backend.Employee.index',compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=company::all();
        return view('backend.Employee.create',compact('companies'));
    }
    public function store(employeeValidation $request)
    {

        $firstName=$request->firstName;
        $lastName=$request->lastName;
        $company_id=$request->company_id;
        $email=$request->email;
        $phone=$request->phone;

        employee::insert([
            'firstName'=>$firstName,
            'lastName'=>$lastName,
            'company_id'=>$company_id,
            'email'=>$email,
            'phone'=>$phone

        ]);
        return redirect('backend/employees')->with('status','employee created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
