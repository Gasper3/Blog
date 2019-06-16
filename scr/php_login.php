<?php
  session_start();

  if(isset($_SESSION['logged'])) {
    header("Location: ../admin/admin.php");
    exit();
  } else {
    if(isset($_POST['username'])) {
      $username = filter_input(INPUT_POST, 'username');
      $password = filter_input(INPUT_POST, 'pass');
      $_SESSION['user'] = $_POST['username'];

      require_once '../database/database.php';

      $que = $db->prepare('SELECT login, password from uzytkownicy where login like :username');
      $que->bindValue(':username', $username, PDO::PARAM_STR);
      $que->execute();
      $us=$que->fetch();

      if($us) {
        $password = $_POST['pass'];
        if(password_verify($password, $us['password'])) {
          $_SESSION['logged'] = true;
          header("Location: ../admin/admin.php");
          exit();
        } else {
          $_SESSION['error_user'] = "<span style='color: red;'>Nieprawidłowe hasło</span>";
          header("Location: ../login.php");
          exit();
        }
      } else {
        $_SESSION['error_user'] = "<span style='color: red;'>Nieprawidłowa nazwa użytkownika</span>";
        header("Location: ../login.php");
        exit();
      }
    } else {
      header("Location: ../login.php");
      exit();
    }
  }
