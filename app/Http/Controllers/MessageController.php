<?php

namespace App\Http\Controllers;
use App\Models\Message;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Ride;
class MessageController extends Controller
{
  
public function showMessage($passengerID)
{
    $passenger = Passenger::find($passengerID);

    if ($passenger) {
        $message = $passenger->message;
        return view('passenger.message', compact('message'));
    }

    return back()->with('error', 'Passenger not found!');
}
public function sendMessage(Request $request)
{
    $senderID = auth()->user()->id;
    $receiverID = $request->input('receiver');
    $content = $request->input('content');

    $message = new Message();
    $message->sender_id = $senderID;
    $message->receiver_id = $receiverID;
    $message->content = $content;
    $message->save();

    return redirect()->back()->with('success', 'Message sent successfully');
}


public function viewReceivedMessages()
{
    $receivedMessages = Message::where('receiver_id', auth()->user()->id)->get();

    return view('received-messages', ['receivedMessages' => $receivedMessages]);
}

}
