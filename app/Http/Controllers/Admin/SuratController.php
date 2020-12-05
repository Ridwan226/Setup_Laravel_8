<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function view_surat()
    {
        return view('admin.surat.list');
    }
}
