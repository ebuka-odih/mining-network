<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Messages;
use App\User;
use http\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index($id)
    {
        $user_details = User::findOrFail($id);
        $user_msg = User::with('notifyUser')->findOrFail($id);
        return view('admin.user_message', compact('user_details', 'user_msg'));
    }

    public function create($id)
    {
        $user_details = User::findOrFail($id);
        return view('admin.create-msg', compact('user_details'));
    }

    public function store(Request $request)
    {
        $id = $request->user_id;
        $request->validate([
                'title' => 'required',
                'message' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        if( $image = $request->file('image')){
            $input['image'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/message/images');
            $image->move($destinationPath, $input['image']);
            $article = new Messages();
            $article->title = $request->get('title');
            $article->message = $request->get('message');
            $article->user_id = $id;
            $article->image = $input['image'];
            $article->save();
        } else {
            $article = new Messages();
            $article->title = $request->get('title');
            $article->message = $request->get('message');
            $article->user_id = $id;
            $article->save();
        }

        return redirect()->route('admin.user_message', $id)->with('success', 'New Message Created Successfully!');


    }

    public function show($id)
    {

//        $user_details = User::findOrFail($id);
        $msg_details = Messages::findOrFail($id);
        $user_details = User::findOrFail($msg_details->user_id);
        return view('admin.msg-details', compact('user_details', 'msg_details'));
    }

    public function destroy($id)
    {
        $message = Messages::findOrFail($id);
        $message->delete();
        return redirect()->back();
    }

}
