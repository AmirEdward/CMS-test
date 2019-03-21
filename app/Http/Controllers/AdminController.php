<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function logout(Request $request) {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated() {
        if(auth()->user()->isAdmin()):
            return redirect('/admin');
        else:
            return redirect('home');
        endif;
    }

    public function index()
    {
        $categories = Category::all();
        $news = News::all();
        return view('admin.index', compact('categories', 'news'));
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'index']);
    }
}
