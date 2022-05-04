<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use App\Models\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversation = Conversation::where('parent_conversation_id', '=',NULL)->get();
        return view('pages.conversation.main', ['conversation' => $conversation]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);
        
        $conversation = new conversation ;
        $conversation->user_id= Auth::User()->id;
        $conversation->message = $request->message;
        $conversation->save();
        return redirect('conversation');
    }

    public function reply(Request $request, Conversation $conversation){
        // dd($conversation);
        $request->validate([
            'message' => 'required',
        ]);
        
        $reply = new conversation ;
        $reply->parent_conversation_id = $conversation->id;
        $reply->user_id= Auth::User()->id;
        $reply->message = $request->message;
        $reply->save();
        return redirect('conversation');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function show(Conversation $conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversation $conversation)
    {
        //
    }
}
