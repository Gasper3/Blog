<html>
<head>
   <title>Panel administracyjny</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="admin/style/all.css">
   <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
   <link rel="shortcut icon" type="image/png" href="img/blog.png"/>
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
      <span class="copyright">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></span>
    </footer>

  </div>

  <div class="main">
    <?php
      require_once 'scr/php-all.php';

    ?>



  </div>

</body>
</html>
