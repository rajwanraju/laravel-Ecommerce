<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
     public function manageUser() {
//        $users=User::all();
//        $users=User::simplePaginate(10);
        $users=User::paginate(10);
        return view('admin.user.manageUser', ['users'=>$users]);
    }
}
