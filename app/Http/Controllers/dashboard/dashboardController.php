<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\comment;
use App\Models\post;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {

        $categories = Category::all()->count();
        $posts = post::all()->count();
        $comments =  comment::all()->count();
        $users = User::all()->count();
        return view('admin.dashboard',[
            'categories' =>$categories,
            'posts'=>$posts,
            'comments'=>$comments,
            'users'=>$users,
        ]);
    }
}
