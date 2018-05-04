<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
class CompanyController extends Controller
{
    public function index()
    {
      $companies = Company::all();
      return view('companies', compact('companies'));
    }
    public function show(Company $company)
    {
      return view('company.company', compact('company'));
    }
    public function delete(Company $company)
    {
      $company->delete();
      return redirect()->route('companies.page')->with('success','Kompanija Istrinta');
    }
    public function create()
    {

      return view('company.companyForm');
    }
    public function store(StoreCompanyRequest $request)
    {
      Company::create([
        'name' =>$request->input('name'),
        'description'=>$request->input('description'),
        'country'=>$request->input('country'),
        'adress'=>$request->input('adress'),
      ]);
      return redirect()->route('companies.page')->with('success','Kompanija Issaugota');
    }

    public function edit(Company $company)
    {
      return view('company.companyForm',compact('company'));
    }

    public function update(Company $company,StoreCompanyRequest $update)
    {
      $company->update([
        'name' =>$update->input('name'),
        'description'=>$update->input('description'),
        'country'=>$update->input('country'),
        'adress'=>$update->input('adress'),

      ]);

      return redirect()->route('companies.page')->with('success','Kompanija Atnaujintas');
    }
}
