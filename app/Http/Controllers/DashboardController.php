<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.index', compact('contact'));
    }

}
