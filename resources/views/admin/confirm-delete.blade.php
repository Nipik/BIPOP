<!DOCTYPE html>
<html>
<head>
    <title>Confirmation of Deletion</title>
    <link rel="stylesheet" href="{{ asset('css/admin/delete.css') }}">
</head>
<body>
    <h1>Delete Confirmation</h1>
    <p>As an administrator you have the right to delete this profile but this action is irreversible!</p>
    <form method="POST" action="{{ route('profile.destroy', auth()->user()) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="cute-button">Confirm</button>
    </form>
    <a href="{{ route('admin.index') }}" class="cute-link">Cancel</a>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");
        form.addEventListener("submit", function(event) {
            event.preventDefault();

            document.body.style.animation = "fade-out 0.5s ease-in-out forwards";
            setTimeout(function() {
                form.submit(); 
            }, 500); 
        });
    });

    </script>
</body>
</html>
