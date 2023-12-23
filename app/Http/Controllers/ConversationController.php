<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = Conversation::all();
        return view('conversations.index', compact('conversations'));
    }

    public function create()
    {
        return view('conversations.create');
    }

    public function store(Request $request)
    {
        $conversation = Conversation::create($request->all());
        return redirect()->route('conversations.index');
    }

    public function show(Conversation $conversation)
    {
        return view('conversations.show', compact('conversation'));
    }

    public function edit(Conversation $conversation)
    {
        return view('conversations.edit', compact('conversation'));
    }

    public function update(Request $request, Conversation $conversation)
    {
        $conversation->update($request->all());
        return redirect()->route('conversations.index');
    }

    public function destroy(Conversation $conversation)
    {
        $conversation->delete();
        return redirect()->route('conversations.index');
    }
}
