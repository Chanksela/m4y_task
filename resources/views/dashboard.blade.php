<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/shared.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <title>M4Y: Dashboard</title>
</head>

<body>
  <nav>
    <div class="user-info">
      Hello, {{ $userName }}
    </div>
    <div>

      <form action="/signout" method="GET">
        <button>Logout</button>
      </form>
    </div>
  </nav>
  <ul>
    <h1>List of all users</h1>

    @foreach ($users as $user)
      <li>
        {{ $user->name }}
      </li>
    @endforeach
  </ul>
</body>

</html>
