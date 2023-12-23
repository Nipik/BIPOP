@extends('layouts.app')

@section('content')
    <h2>Liste des Messages</h2>

    @foreach($messages as $message)
        <p>{{ $message->user->name }}: {{ $message->content }}</p>
    @endforeach
@endsection
