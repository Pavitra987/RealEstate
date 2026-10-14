<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Real Estate</title>
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">
</head>
<link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">
<body>
    

    <nav class="main-nav">
        <div class="logo">
           <img src="{{ asset('assets/images/realestatelogo.jpg') }}">
        </div>
        <a href="/">Home</a>
         <a href="/contact">contact</a>
          <a href="/company">companies</a>
            <a href="/agents">agents</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>2026 real estate homes</footer>
    
</body>
</html>