<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class activityController extends Controller
{
    public function index()
    {
        $user = User::select()count();
     
        
    }
}
