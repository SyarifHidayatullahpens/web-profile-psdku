<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Major;
use App\Models\Pmb;
use App\Models\Departement;
use App\Models\News;


class AdminController extends Controller
{
    public function index() {
        $major = Major::count();
        $dataMajor = Major::all();
        $departements = Departement::count();
        $pmbs = Pmb::count();
        $news = News::count();
        return view('admin.home.index', compact('major', 'departements','pmbs','news', 'dataMajor'));
    }
}
