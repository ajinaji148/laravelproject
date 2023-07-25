<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScopeModel;
use App\Models\user;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Mail;



class ScopeController extends Controller
{
  public function submit(Request $request){
    $validate=$request->validate([
        'firstname'=>'required','lastname'=>'required','gender'=>'required',
        'dob'=>'required','email'=>'required','phonenumber'=>'required',
        'state'=>'required','city'=>'required','file'=>'required','hobbies'=>'required'
    ]);

    $firstname=$request->input('firstname');
    $lastname=$request->input('lastname');
    $gender=$request->input('gender');
    $dob=$request->input('dob');
    $email=$request->input('email');
    $phonenumber=$request->input('phonenumber');
    $state=$request->input('state');
    $city=$request->input('city');
    $avatar=$request->file('file');
    $original_name=$avatar->getClientOriginalName();
    $avatar->storeAs('public/uploads',$original_name);
    $hobbies=$request->input('hobbies');
    $password=rand(1000,2222);

    $check_exist=User::where('email',$email)->get();

    if(count($check_exist)){
      // return 'helloo';
      @session()->flash('success','user already exist');
      return redirect ('/registration');
    }else{
      User::create([
        'name'=>$firstname,
        'email'=>$email,
        'password'=>Hash::make($password)
  
     ]);
     $user_id=User::where('email',$email)->pluck('id');
     $obj=new ScopeModel();
     $obj->firstname=$firstname;
     $obj->lastname=$lastname;
     $obj->gender= $gender;
     $obj->date_of_birth= $dob;
     $obj->email= $email;
     $obj->phonenumber= $phonenumber;
     $obj->state= $state;
     $obj->city= $city;
     $obj->avatar= $avatar;
     $obj->hobbies= $hobbies;
     $obj->userid=$user_id[0];
  
     $obj->save();
    }
      $to=$email;
      $message="temp password is $password";
      Mail::raw($message,function($email) use($to){
        $email->to($to)->subject('hello');
      });
    // $obj=new ScopeModel();
    // $obj->firstname=$firstname;
    // $obj->lastname=$lastname;
    // $obj->gender= $gender;
    // $obj->date_of_birth= $dob;
    // $obj->email= $email;
    // $obj->phonenumber= $phonenumber;
    // $obj->state= $state;
    // $obj->city= $city;
    // $obj->avatar= $avatar;
    // $obj->hobbies= $hobbies;
    // $obj->userid=$user_id[0];
   
   
    // $obj->save();
   

  

    // ScopeModel::create(['firstname'=>$firstname,'lastname'=>$lastname,'gender'=>$gender,'date_of_birth'=>$dob,
    // 'email'=>$email,'phonenumber'=>$phonenumber,
    // 'state'=>$state,'city'=>$city,'avatar'=>$original_name,'hobbies'=>$hobbies,'userid'=>$user_id[0] ]);

  
     

  return redirect("index");
  }
  
  // public function register(Request $request){
  //   $validate=$request->validate(['name'=>'required','email'=>'required','password'=>'required']);

  //   $name=$request->input('name');
  //   $email=$request->input('email');
  //   $password=$request->input('password');

    // $obj=new product();
    // $obj->email=$email;
    // $obj->password=$password;

   
    // return redirect('login');
    public function login(Request $request){
      $credential=$request->only('email','password');
      if(Auth::attempt($credential)){
          return redirect("index");
      }else{
          echo "pls enter valid email & password";
      }

    }
    public function logout(Request $request){
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/index');
    }

}





