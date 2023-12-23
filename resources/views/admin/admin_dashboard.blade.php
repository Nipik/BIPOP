<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div>
        <h1>Dashboard</h1>
        <div class="users">
            <p>Number of users : {{ $totalUsers }}</p>
            <p>Active users : {{ $activeUsers }}</p>
            <p>Inactive users : {{ $inactiveUsers }}</p>
        </div>
        <ul>
            @foreach($rolesDistribution as $role)
                <li>{{ $role->name }} : {{ $role->users_count }}</li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('admin.index') }}">View user list</a>
   

    <div style="max-width: 600px; margin: 0 auto;">
        <canvas id="userChart" width="600" height="300"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('userChart').getContext('2d');
            var userChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Number of Users',
                        data: [12, 19, 3, 5, 2, 3, 15],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

</body>
</html>
