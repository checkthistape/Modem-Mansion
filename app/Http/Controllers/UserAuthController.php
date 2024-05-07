<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\UserSignupRequest;
use App\Http\Requests\UserLoginRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function indexSignUp()
    {
        return view("signup");
    }

    public function indexLogin()
    {
        return view("login");
    }

    public function registrate(UserSignupRequest $request)
    {

        # Retrieve the validated input data
        $validated = $request->validated();

        # Creating a record in the database
        $search = DB::select("select * from profile_info where displayname = ?", array($validated['username']));
        if (!$search) {
            DB::table('users')->insert([
                'username' => $validated['username'],
                'password' => Hash::make($validated['pswd2']),
                'usershowed' => date('Y-m-d H:i:s')
            ]);

            $userid_fk = DB::table('users')->select('userid')->orderByDesc("userid")->limit(1)->get()[0]->userid;

            DB::table('profile_info')->insert([
                'displayname' => $validated['username'],
                'description' => "User hasn't edited it yet",
                'userid_fk' => $userid_fk
            ]);

            $summary = DB::table('profile_info')->where('displayname', '=', $validated['username'])->limit(1)->get();
            if (!$summary) {
                abort(500, "Something happened, please refresh the page");
            }

            #Is it safe to do so? userid_fk => "select userid from userid order by userid desc limit 1"?? How can it be improved?
        } else {
            abort(500, "Something happened, please refresh the page");
        }

        # Redirecting
        return redirect()->route('home')->with('registration-success', 'You have successfully registrated. Congrats!');

        # My validation which is normal php validation, TODO username check
        // dump($_POST);
        // $supposedUsrName = request()->get('username');
        // $pswd1 = request()->get('pswd1');
        // $pswd2 = request()->get('pswd2');
        // dump($supposedUsrName);

        // $users = DB::select("select * from users where username = ?", array($supposedUsrName));
        // echo 'User IP - '.$_SERVER['REMOTE_ADDR']."</br>";

        // if(!$users){
        //     if (empty($pswd1) || empty($pswd2) || $pswd1 == "" || $pswd2 == "") {
        //         echo "Passwords are empty!";
        //         return;
        //     }
        //     if (!ctype_alnum($pswd1) || !ctype_alnum($pswd2)) {
        //         echo "Passwords have special characters!";
        //         return;
        //     }
        //     if ($pswd1 !== $pswd2) {
        //         echo "Your passwords are not the same!";
        //         return;
        //     }
        //     if (strlen($pswd1)>24) {
        //         echo "Bad, your password is too long!";
        //         return;
        //     }
        //     if (strlen($pswd1)<8) {
        //         echo "Bad, your password is too short!";
        //         return;
        //     }
        //     echo "Your password is good!";
        //     return redirect()->route('home')->with('registration-success', 'You have successfully registrated. Congrats!');
        // }
        // else {
        //     echo "User with the $supposedUsrName nickname already exists, </br> please consider changing it";
        // }


    }

    public function login(UserLoginRequest $request)
    {

        # Retrieve the validated input data
        $validated = $request->validated();

        if (auth()->attempt([
            'username' => $validated['username'],
            'password' => $validated['pswd'] # Hash::make($validated['pswd'])
        ])) {

            request()->session()->regenerate();

            echo "Auth user: " . Auth::user() . "";

            return redirect()->route("home");
        }

        return redirect()->route("user.login")->withErrors(['pswd' => "Provided password isn't correct or the username doesn't exist"]);
    }

    public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerate();
        
        return redirect()->route("home");
    }
}
