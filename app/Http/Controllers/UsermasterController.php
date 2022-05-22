<?php

namespace App\Http\Controllers;

use App\Models\Usermaster;
use Illuminate\Http\Request;
use Hash;

class UsermasterController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Users';
        $data['q'] = $request->get('q');
        $data['users'] = Usermaster::where('name', 'like', '%' . $data['q'] . '%')->get();
        return view('usermaster.index', $data);
    }

}
