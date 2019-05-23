<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totals = [
            'membersOnline' => DB::table('users')->count(),
            'peer' => DB::table('users')->where('designation', 'peer')->count(),
            'professional' => DB::table('users')->where('designation', 'admin')->count(),
            'queries_answer' => DB::table('questions')->whereNotNull('answer')->count(),
            'total_queries' => DB::table('questions')->count(),
        ];

       
        return view('content.overview')->with('total', $totals);
    }

    public function changePassword(Request $request) {
        DB::table('users')->where('email', Auth::user()->email)->update(['password' => bcrypt($request->newpassword)]);
        return redirect('login');
    }
}
