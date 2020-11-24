<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 

// csatlakozás az adatbázishoz
$db = mysqli_connect('localhost', 'root', '', 'registration');

// regisztrálás
if (isset($_POST['reg_user'])) {
  // adatok bekérése
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Hiányzik a felhasználónév"); }
  if (empty($email)) { array_push($errors, "Hiányzik az Email"); }
  if (empty($password_1)) { array_push($errors, "Hiányzik a jelszó"); }
  if ($password_1 != $password_2) {
	array_push($errors, "A két jelszó nem eggyezik");
  }


  // ha a fiók még nem létezik
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // ha már létezik a fiók
    if ($user['username'] === $username) {
      array_push($errors, "A felhasználónév már foglalt");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Ez az Email már foglalt");
    }
  }

  // ha nincs hiba
  if (count($errors) == 0) {
  	$password = md5($password_1);//jelszó kódolása

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Be vagy jelentkezve";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Hiányzik a felhasználónév");
    }
    if (empty($password)) {
        array_push($errors, "Hiányzik a jelszó");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Be vagy jelentkezve";
          header('location: index.php');
        }else {
            array_push($errors, "Roszz felhasználónév/jelszó");
        }
    }
  }
  
  ?>