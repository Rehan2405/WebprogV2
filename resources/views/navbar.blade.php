@section('navbar')
<head>
  
  <title>@yield('Navbar')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><h1>Rolling Dice</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item home">
        <a class="nav-link" href="/home"><h3>Home</h3> <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item about">
        <a class="nav-link" href="/home"><h3>About</h3></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/about"><h3>404 Button</h3></a>
      </li>
    </ul>
    
    <form class="my-2 my-lg-0">
    <li class="nav-item login">
        <a href="/login" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Login</a>
      </li>
    </form>
    <!-- <div class="mb-3">
                <label for="inputImage" class="form-label">Dice Image</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div> -->
  </div>
</nav>
</body>
</html>
