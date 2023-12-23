<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systeme de Messagerie</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('conversations.index') }}">Liste des Conversations</a></li>
            <li><a href="{{ route('conversations.create') }}">Nouvelle Conversation</a></li>
            <li><a href="{{ route('messages.index') }}">Liste des Messages</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
