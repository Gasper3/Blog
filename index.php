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

  </div>

  <div class="main">
    <?php
      if(isset($_POST['button'])) {
        
      }

    ?>


    <h7 class="copyright">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></h7>
  </div>

</body>
</html>
