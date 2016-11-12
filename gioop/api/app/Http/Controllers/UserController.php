<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Input;
use Image;
use App\User;

class UserController extends Controller
{

    public function store (Request $request)
    {

    }

    public function index ()
    {

    }

    public function create()
    {
        return view('users/create');
    }

    public function update (Request $request)
    {
        //return "Generando actualización de perfil...";

    }

    public function show ()
    {

    }

    public function edit ()
    {

    }

    public function destroy ()
    {

    }

    public function missingMethod($parameters = array())
    {
        // Disparamos un error 404.
        abort(404);
    }

}
