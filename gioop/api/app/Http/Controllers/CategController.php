<?php

namespace App\Http\Controllers;

use App\Categ;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CategController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $categs = Categ::paginate(30);
        return view('categs.index', compact('categs'));
    }

    public function getCreate()
    {
        return view('categs.create');
    }

    public function postCreate(Request $request)
    {
        $user = Auth::user();
        $categ = Categ::create($request->all());
        return redirect('categs')->withSuccess($categ->categoria.' has been saved.');
    }

    public function show(Categ $categ)
    {
        return view('categs.show', compact('categ'));
    }

    public function edit(Categ $categ)
    {
        return view('categs.edit', compact('categ'));
    }

    public function update(Request $request, Categ $categ)
    {
        $categ->update($request->all());
        return redirect('categs')->withSuccess($categ->categoria.' has been updated.');
    }

}
