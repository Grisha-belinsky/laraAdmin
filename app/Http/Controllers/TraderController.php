<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class TraderController extends Controller
{
    public function __construct() {
        view()->share('user_type', 'Trader');
        view()->share('page_active', 'home');
    }
    
    // Share User Data
    public function shareUserData() {
        
        $user_id = Auth::user()->id;
        $data = User::find($user_id);
        view()->share('data', $data);
    }

    public function index() {

        $this->shareUserData();
        return view('trader.home');
    }
}
