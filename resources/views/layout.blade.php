<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://kit.fontawesome.com/665d94e5f3.js" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Praceo | Find your dream job</title>
    </head>
    <body >
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>
        <div class="text-center">
            <a href="/">
                <img src="{{asset('images/logo.png')}}">
            </a>
        </div>
        
        <main>
            @yield('content')
        </main>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright: Praceo
            </div>
        </footer>

            
    </body>
</html>
