<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>M4Y</title>
</head>

<body>
  <h1>Welcome to M4Y</h1>
  {{ $users }}
  @foreach ($users as $user)
    <p>{{ $user->name }}</p>
  @endforeach
  <form method="POST" action="/users">
    @csrf
    <div>
      <label>Username</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label>Email</label>
      <input type="text" name="email" id="email">
    </div>
    <div>
      <label>Password</label>
      <input type="text" name="password" id="password">
    </div>
    <div> <label>Confirm Password</label>
      <input type="text" name="confirm_password" id="confirm_password">
    </div>
    <button>Register</button>
  </form>
</body>

</html>
