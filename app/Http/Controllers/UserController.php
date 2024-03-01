<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
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
        $users = DB::table('users')->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'users'
        );
        // $users = DB::table('users')
        //     ->join('posts', function (JoinClause $join) {
        //         $join->on('users.id', '=', 'posts.user_id');
        //     })
        //     ->get();

            // DB::table('users')
            // ->join('contacts', function (JoinClause $join) {
            //     $join->on('users.id', '=', 'contacts.user_id')
            //          ->where('contacts.user_id', '>', 5);
            // })
            // ->get();
 
        return view('users.index', ['users' => $users]);
    }
}

?>