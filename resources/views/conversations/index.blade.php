@extends('layouts.app')

@section('content')
    <h2>Liste des Conversations</h2>

    @foreach($conversations as $conversation)
        <p><a href="{{ route('conversations.show', $conversation) }}">{{ $conversation->id }}</a></p>
    @endforeach
@endsection
