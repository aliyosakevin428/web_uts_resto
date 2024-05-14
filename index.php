<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Logo Restoran</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=menu">Menu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya...
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=kontak">Kontak</a></li>
            <li><a class="dropdown-item" href="?page=about">About</a></li>
            <li><a class="dropdown-item" href="?page=member">Our Member</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container my-4">
  <?php 

    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include("pages/home.php");
            break;

        case 'menu':
            include("pages/menu.php");
            break;

        case 'kontak':
            include("pages/kontak.php");
            break;

        case 'about':
            include("pages/about.php");
            break;  
        
        case 'member':
            include("pages/member.php");
            break;
        
        default:
          include("pages/home.php");
          break;
        
    }
  ?>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>