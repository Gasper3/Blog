<html>
<head>
   <title>Panel administracyjny</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class="container">
    <header>
      <span class="naglowek">Blog</span>
    </header>

    <section>
      <h2 class='nav'>Search</h2>
      <form method="post">
        <input type="text" class="search" name="szukaj"><input type="submit" value='Search' alt="Submit" name="button" class='search'>
      </form>
    </section>

    <nav>
      <ul>
        <li class='nav'>NAVIGATION</li>
        <li><a href='login.php'>Sign in</a></li>
        <li><a href='newsletter.php'>Newsletter</a></li>
      </ul>
    </nav>

    <footer>
      <h5>Made by Gasper3</h5>
    </footer>

  </div>

  <div class="main">
    <?php
      if(isset($_POST['button'])) {

      }

    ?>



  </div>

</body>
</html>
