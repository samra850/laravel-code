<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
</head>
<body>

  @include('partials.nav')
  
  <div class="container">
    @yield('content')
  </div>
  
  @include('partials.footer')

</body>
</html>