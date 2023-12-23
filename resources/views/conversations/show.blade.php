@extends('layouts.app')
@section('content')
    <h2>Conversation {{ $conversation->id }}</h2>

    <p>Participants :</p>
    <ul>
        @foreach($conversation->users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    <h3>Messages :</h3>
    @foreach($conversation->messages as $message)
        <p>{{ $message->user->name }}: {{ $message->content }}</p>
    @endforeach
@endsection
