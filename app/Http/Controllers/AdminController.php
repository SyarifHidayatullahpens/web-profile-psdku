<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Major;
use App\Models\Pmb;


class AdminController extends Controller
{
    public function index() {
        $major = Major::all();
        $pmbCount = Pmb::count();
        return view('admin.home.index', compact('major', 'pmbCount'));
    }
}
