<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="bg-800">
  <h1> Welcome Ruth</h1>

   <!-- Authentication -->
   <form method="POST" action="{{ route('logout') }}">
    @csrf
      <input type="submit" value="log out">
   </form>
</body>
</html>