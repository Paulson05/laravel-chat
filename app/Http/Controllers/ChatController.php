<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
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

    public function index(){
       return view('chat');

    }

    public function send(Request $request){
//           return $request->all();

        $user = User::find(Auth::id());
        $this->saveToSession($request);
        event(new ChatEvent($request->message,$user));
    }
    public function saveToSession(request $request)
    {
        session()->put('chat',$request->message);
    }

    public function getOldMessage(){
        return view('chat');
    }
    public function deleteSession(){
        session()->forget('chat');
    }

//    public function send(){
//        $message = 'hello buchi';
//        $user = User::find(Auth::id());
//        event(new ChatEvent($message,$user));
//    }
}
