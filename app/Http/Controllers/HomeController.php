<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User as User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

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
        /*
        $valid_rules = array(
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'confirm_password' => 'required',
        );

        $validator = Validator::make(Input::all(), $valid_rules);

        if($validator->fails()) {
            return back()->with('error_message', 'All fields are required');
        }
        */
        if(Hash::check($request->old_password, Auth::user()->password)) {
            if($request->new_password == $request->confirm_password) {
                DB::table('users')->where('email', Auth::user()->email)->update(['password' => bcrypt($request->new_password)]);
                Auth::logout();
                return redirect('login');        
            } else {
                return back()->with('error_message', 'New Password and Confirm Password does not match');
            }
        } else {
            return back()->with('error_message', 'Your old password is incorrect');
        }
    }

    public function showAdminList() {
        $admins = DB::table('users')->where('designation', 'Admin')->get();
        return view('content.viewadmins', compact('admins'));
    }

    public function destroy(Request $request) {
        Auth::logout();
        $user = User::find($request->userid);
        if($user->delete()) {
            return redirect('login');
        } else {
            return back()->with('error_message', 'Server Error. Please try again later.');
        }
    }

    public function listPeers() {
        $ypeer = user::where('designation', 'Peer')->where('peer_verified', '1')->get();
        return view('content.peercslr', compact('ypeer'));
    }
}
