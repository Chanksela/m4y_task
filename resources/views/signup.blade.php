<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/shared.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
  <title>M4Y: Register</title>
</head>

<body>
  <h1>Register</h1>
  @include('partials.signup-form')
  @include('partials.alternative-page')
</body>

</html>
