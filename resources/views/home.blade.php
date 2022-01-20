<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  
  <h1>Hello World</h1>

  <a href="{{ route('about') }}"> About</a>

  <h2>Hello {{ $name }}</h2>

  <ul>
    @foreach ($films as $film)
      <li> {{$film}} </li>
    @endforeach
  </ul>


</body>
</html>