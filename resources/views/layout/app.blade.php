<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
<title> Todo Application</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">To Do Application</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/todos">Todos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/create-todo">Create Todo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about">About</a>
                    </li>
                  </ul>

                </div>
              </nav>
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
@yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
