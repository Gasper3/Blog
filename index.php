<html>
<head>
   <title>Panel administracyjny</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="admin/style/all.css">
   <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
      <span class="naglowek">Blog</span>
    </header>

    <section>
      <h2 class='nav'>Szukaj</h2>
      <form method="post">
        <input type="text" class="search" name="szukaj"><input type="submit" value='Search' alt="Submit" name="button" class='search'>
      </form>
    </section>

    <nav>
      <ul>
        <li class='nav'>MENU</li>
        <li></li>
        <li><a href='newsletter.php'>Newsletter</a></li>
      </ul>
    </nav>

    <footer>
      <h5>Made by Gasper3<br><a href='login.php'>Zaloguj</a></h5>
    </footer>

  </div>

  <div class="main">
    <?php
      require_once 'scr/php-all.php';

    ?>



  </div>

</body>
</html>
