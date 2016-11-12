<?php

namespace App\Http\Controllers;

use App\Categ;

use App\Http\Requests;
use App\Company;
use App\User;
use App\Http\Requests\StoreRequest;
use Auth;
use Input;
use Image;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('companies.index', ['company' => $company]);
    }

    public function getCreate()
    {
        $categs = [''=>''] + Categ::pluck('name', 'id')->toArray();
        return view('companies.create', compact('categs'));
    }

    public function postCreate(StoreRequest $request)
    {
        $user = Auth::user();
        $company = Company::create($request->all());
        return redirect('/stores')->withSuccess($company->name.' has been saved.');
    }

    public function show($id)
    {
        $store = Store::find($id);
        return view('companies.index',['company'=>$store]);
    }

    public function edit(Store $store)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(StoreRequest $request, Store $store)
    {
        $store->update($request->all());
        return redirect('stores')->withSuccess($store->name.' has been updated.');
    }

}
