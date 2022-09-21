<?php

namespace App\Http\Controllers;

use Nette\Utils\Image;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\companyValidation;
use Symfony\Component\Console\Input\Input;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=company::all();
        return view('backend.company.index',compact('companies'));
    }



    public function create()
    {
       return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(companyValidation $request)
    {

        $companies=$request->all();
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path=$request->file('logo')->storeAs('images',$fileName,'public');
        $companies["logo"]=$path;
       company::create($companies);
       return redirect('backend/companies')->with('success',' Company created successfully');
    }


    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $company)
    {
        $companies=company::find($company);
        return view('backend.company.edit',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
    }
}
