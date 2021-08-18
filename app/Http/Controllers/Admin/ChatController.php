<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoachPlayerMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function chating(Request $request ,$id)
    {
        $user = User::find($id);
        $collection = collect();
        $sender= CoachPlayerMessage::where('sender_id',Auth::id())->where('receiver_id',$id)->get();
        $reciver = CoachPlayerMessage::where('sender_id',$id)->where('receiver_id',Auth::id())->get();
        $concatenated = $collection->concat($sender)->concat($reciver);
        $data =$concatenated->all();
        return view('web.dashboard.chat.index',compact('user','data'));
    }
    public function chatStore(Request $request)
    {

        $chatStore = new CoachPlayerMessage();
        $chatStore->sender_id = Auth::id();
        $chatStore->receiver_id = $request->id;
        $chatStore->message = $request->msg;
        $chatStore->save();
        return $chatStore;

    }
}
