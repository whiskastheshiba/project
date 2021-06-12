<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
//    protected function register(Request $request)
//    {
//        $input = $request->all();
//        $validator = $this->validator($input);
//        
//        if($validator->passes()){
//            $data = $this->create($input)->toArray();
//            
//            $data['token'] = str_random(25);
//            
//            $user = User::find($data['id']);
//           
//            $user->token = $data['token'];
//            $user->save();
//            
//            Mail::send('mails.confirmation',$data, function($message) use ($data){
//                $message->to($data['email']);
//                $message->subject('Registration confirmation');
//            });
//            return redirect(route('login'))->with('status','Confirmation email has been send, pleas check your acccount');   
//        }
//        return redirect(route('login'))->with('status'.$validator->errors());  
//    }
//    
//    public function confirmation($token){
//        $user = User::where('token',$token)->first();
//        
//        if(!is_null($user)){
//            $user->confirmed = 1;
//            $user->token='';
//            $user->save();
//            return redirect(route('login'))->with('status'.'    y   our activation is completed :)');  
//        }
//        return redirect(route('login'))->with('status'.'Something wrong');  
//    }
    
}