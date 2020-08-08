<?php
namespace Dexbytes\Registration\Http\Controllers;

use App\Http\Controllers\Controller;
use Dexbytes\Registration\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('registration::registration');
    }

    public function create(Request $request)
    {
        Registration::create($request->all());
        return redirect( route('registration.index'));
    }
}
