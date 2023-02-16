<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    // Admin Login
    public function adminLogin(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // Validation
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required'
            ];
            $customMessage = [
                'email.required' => 'Email Address is required',
                'email.email' => 'Email Address is not valid email address',
                'email.max' => 'You are not allowed to enter more than 255 characters',
                'password.required' => 'Password is required',
            ];
            $this->validate($request, $rules, $customMessage);

            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
                return redirect()->route('adminDashboard');
            } else {
                Session::flash('error_message', 'Invalid Username or Email');
                return redirect()->route('adminLogin');
            }

        }

        if (Auth::guard('admin')->check()){
            return redirect()->route('adminDashboard');
        } else {
            return view ('admin.login');
        }

    }

    //Forget Password
    public function forgetPassword()
    {
        return view('admin.forgetPassword');
    }
    //Admin Dashboard
    public function adminDashboard()
    {
        Session::put('admin_page', 'dashboard');

        $category = DB::table('categories')->count();
        $comment = DB::table('comments')->count();
        $admin = DB::table('admins')->count();
        $users = DB::table('users')->count();
        $travel = DB::table('news')->where('slug', 'LIKE', 'travel')->count();
        $lifestyle = DB::table('news')->where('slug', 'LIKE', 'lifestyle')->count();
        $blog = DB::table('news')->where('slug', 'LIKE', 'blog')->count();
        $cryptocurrency = DB::table('news')->where('slug', 'LIKE', 'cryptocurrency')->count();
        $business = DB::table('news')->where('slug', 'LIKE', 'business')->count();
        $success = DB::table('news')->where('slug', 'LIKE', 'success')->count();
        $forbes = DB::table('news')->where('slug', 'LIKE', 'forbes')->count();
        $codeforces = DB::table('news')->where('slug', 'LIKE', 'codeforces')->count();
        $acmp = DB::table('news')->where('slug', 'LIKE', 'acmp')->count();
        $algorithm = DB::table('news')->where('slug', 'LIKE', 'algorithm')->count();
        $informatics = DB::table('news')->where('slug', 'LIKE', 'informatics')->count();
        $java = DB::table('news')->where('slug', 'LIKE', 'java')->count();
        $cplusplus = DB::table('news')->where('slug', 'LIKE', 'cplusplus')->count();
        $database = DB::table('news')->where('slug', 'LIKE', 'database')->count();
        $gamedev = DB::table('news')->where('slug', 'LIKE', 'gamedev')->count();
        $englishlanguage = DB::table('news')->where('slug', 'LIKE', 'english-language')->count();
        $russianlanguage = DB::table('news')->where('slug', 'LIKE', 'russian-language')->count();
        $math = DB::table('news')->where('slug', 'LIKE', 'math')->count();
        $hacking = DB::table('news')->where('slug', 'LIKE', 'hacking')->count();
        $books = DB::table('news')->where('slug', 'LIKE', 'books')->count();

        return view('admin.dashboard', [
            'category'=>$category,
            'comment'=>$comment,
            'admin'=>$admin,
            'users'=>$users,
            'travel'=>$travel,
            'lifestyle'=>$lifestyle,
            'blog'=>$blog,
            'cryptocurrency'=>$cryptocurrency,
            'business'=>$business,
            'success'=>$success,
            'forbes'=>$forbes,
            'codeforces'=>$codeforces,
            'acmp'=>$acmp,
            'algorithm'=>$algorithm,
            'informatics'=>$informatics,
            'java'=>$java,
            'cplusplus'=>$cplusplus,
            'database'=>$database,
            'gamedev'=>$gamedev,
            'englishlanguage'=>$englishlanguage,
            'russianlanguage'=>$russianlanguage,
            'math'=>$math,
            'hacking'=>$hacking,
            'books'=>$books,
        ]);
    }
    // Admin Logout
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Session::flash('success_message', 'Logout Successful');
        return redirect()->route('adminLogin');
    }

    // Admin profile
    public function profile(){
        $admin = Auth::guard('admin')->user();
        return view ('admin.profile', compact('admin'));
    }

    // Update Admin profile
    public function profileUpdate(Request $request, $id){
        $data = $request->all();
        $validateData = $request->validate([
            'account' => 'required',
        ]);
        $admin_id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($id);
        $admin->account = $data['account'];
        $admin->name = $data['name'];
        $admin->surname = $data['surname'];
        $admin->address = $data['address'];
        $admin->phone_number = $data['phone_number'];

        if ($request->hasFile('image'))
        {
            $destination_path = 'public/uploads/admin';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $admin['image'] = $image_name;
        }

        $admin->save();
        Session::flash('success_message', 'Admin Profile Has Been Updated Successfully');
        return redirect()->back();
    }

    // Change Password
    public function changePassword(){
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view ('admin.changePassword', compact('admin'));
    }

    // Check User Password
    public function checkUserPassword(Request  $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $user_id = Auth::guard('admin')->user()->id;
        $check_password = Admin::where('id', $user_id)->first();
        if(Hash::check($current_password, $check_password->password)){
            return "true"; die;
        } else {
            return "false"; die;
        }
    }

    // Update Password
    public function upatePassword(Request $request, $id){
        $validateData = $request->validate([
            'current_password' => 'required|max:255',
            'password' => 'min:6',
            'pass_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $current_admin_password = $admin->password;
        $data = $request->all();
        if(Hash::check($data['current_password'], $current_admin_password)){
            $admin->password = bcrypt($data['password']);
            $admin->save();
            Session::flash('success_message', 'Admin Password Has Been Updated Successfully');
            return redirect()->back();
        } else {
            Session::flash('error_message', 'Your Password does not match with our database');
            return redirect()->back();
        }
    }

}
