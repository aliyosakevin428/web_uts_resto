<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Restoran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    * {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    :root {
      --main-color: #ff702a;
      --text-color: #fff;
      --bg-color: #1e1c2a;
    }

    body {
      background-color: var(--bg-color);
      color: var(--text-color);
      scroll-behavior: smooth;
    }

    .btn {
      color: var(--text-color);
      background-color: #ff702a;
      border-radius: 0.5rem;
    }

    .btn:hover {
      background-color: var(--main-color);
      transform: scale(1.1) translateY(8px);
      transition: .4s;
      color: var(--bg-color);
    }

    .navbar-brand, .navbar .nav-link {
      color: var(--text-color);
      font-weight: 600;
    }

    .navbar-brand:hover, .navbar .nav-link:hover {
      color: var(--main-color);
    }

    h1 {
      color: var(--main-color);
    }

  </style>
</head>

<body>

    <!-- Nav -->
    <?php include ('pages/navbar.php')?>

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

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>