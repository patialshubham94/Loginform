<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login_user;
use Validator;
use App\Models\User; //used fro user model
use Illuminate\Support\Facades\Crypt;

class User_loginMethods extends Controller
{
    public function get_Registration(Request $req)
    {
        return view('registration');
    }

    public function get_User(Request $req)
    {
        return view('user');
    }

    //get inputs from registration page########################################################
    public function get_RegistrationData(Request $req)
    {
        //validate inputs
        $req->validate(['username'=>'required|unique:Login_users,username|max:50',
         'email'=>'required|email|unique:Login_users,username',
          'password'=>'required|confirmed|min:8']);
        $InputUsernam1 = $req->input('username');
        $InputEmail1 = $req->input('email');
        // $InputPassword1 = $req->input('password'); //for simple string input
        $InputPassword1 =Crypt::encryptString($req->input('password')); //for encrypt password

        //insert data using Login_user model class
        Login_user::insert(
            ['username'=>$InputUsernam1,
            'email'=>$InputEmail1,
            'password'=>$InputPassword1]
        );
        // return view('welcome');
        return redirect('/');
    }

    // get inputs from login page####################################################################
    public function get_LoginData(Request $req)
    {
        //validate inputs
        $req->validate(['email'=>'required|email', 'password'=>'required']);
        $InputEmail1 = $req->input('email');
        $InputPassword1 = $req->input('password');
        // $InputPassword1 =bcrypt($req->input('password'));
        // $InputPassword1 = $req->input('password');
        // $formFields['password'] = bcrypt($formFields['password']); //copy 
        $LoginUserTable=Login_user::where('email',$InputEmail1)->get();
        $decrypted="";
        $email="";
        $username ="";
        if($LoginUserTable->count()>0){
        foreach($LoginUserTable as $row)
        {
            $email = $row->email;
            $password = $row->password;
            $decrypted = Crypt::decryptString($password); //decrypt password fetch from database
            $username = $row->username;
        }
        if($InputEmail1==$email && $InputPassword1==$decrypted)
            {

                $req->session()->put('name',$username);
                $req->session()->get('name');
                // return redirect()->route('userlogin');
                // return view('user'); //incorrect 
                return redirect('/user');

            }
            else{
                session()->flash('error','invalid username and password!');               
            }
        }
        else{
            session()->flash('error','Invalid email!');
        }
        return redirect('/'); 
    }

    //use auth copy form laragigs############################################################################
    // public function create() {
    //     return view('registeration');
    // }

    // // Create New User
    // public function store(Request $request) {
    //     $formFields = $request->validate([
    //         'username' => ['required', 'min:3'],
    //         'email' => ['required', 'email', Rule::unique('Login_users', 'email')],
    //         'password' => 'required|confirmed|min:6'
    //     ]);

    //     // Hash Password
    //     $formFields['password'] = bcrypt($formFields['password']);

    //     // Create User
    //     $user = User::create($formFields);

    //     // Login
    //     auth()->login($user);

    //     return redirect('/user')->with('message', 'User created and logged in');
    // }

    // // Logout User
    // public function logout(Request $request) {
    //     auth()->logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/')->with('message', 'You have been logged out!');

    // }

    // // Show Login Form
    // public function login() {
    //     return view('welcome');
    // }

    // // Authenticate User
    // public function authenticate(Request $request) {
    //     $formFields = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => 'required'
    //     ]);

    //     if(auth()->attempt($formFields)) {
    //         $request->session()->regenerate();

    //         return redirect('/')->with('message', 'You are now logged in!');
    //     }

    //     return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    // }
   
}
