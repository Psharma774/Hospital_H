<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Mycontact;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {

            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor = doctor::all();
        }
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }

    public function appointment(Request $request){
        $data=new appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment SuccessfullySubmit. We will contact soon');
    }

    public function myappointment(){

        if(Auth::id())
        {
            if(Auth::user()->usertype==0){
                $userid=Auth::user()->id;
                $appoint=appointment::where('user_id',$userid)->get();
                return view('user.my_appointment',compact('appoint'));
            }
            else{
                return redirect('login');
            }
        }
        else{
            return redirect()->back();
        }

    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function about(){
        return view('user.about');
    }

    public function contact(){
        return view('user.contact');
    }

    public function blog(){
        return view('user.blog');
    }

    public function show_contact_user(){
        return view('user.show_contact_user');

    }

    public function blog_details(){
        return view('user.blog_details');

    }
    public function mycontact(Request $request){
        $userinfo= new mycontact;
        $userinfo->name=$request->name;
        $userinfo->email=$request->email;
        $userinfo->number=$request->number;
        $userinfo->subject=$request->subject;
        $userinfo->message=$request->message;

        if(Auth::id()){
            $userinfo->user_id=Auth::user()->id;
        }

        $userinfo->save();
        return redirect()->back()->with('message','We will contact soon');

    }
}
