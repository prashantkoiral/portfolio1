<?php

namespace App\Http\Controllers;
use App\Models\Eduction;
use App\Models\Professional_experience;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::where('id', 1)->paginate(1);
        $educationData = Eduction::all();
        $professionalData = Professional_experience::all();     
        return view('home.userpage', compact('profile', 'educationData', 'professionalData'));
    }
    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.userpage');
        }
    }

   
}
