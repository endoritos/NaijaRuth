<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecom Naijaruth</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('styles')
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
  @yield('content')
  <script src="{{asset("assets/js/bootsrap.min.js")}}"></script>
  @yield('scripts')
</body>
</html>