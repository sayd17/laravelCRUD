<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    
    public function index(): View
    {
        $users = DB::table('users')->get();
 
        return view('users.index', ['users' => $users]);
    }
}

?>