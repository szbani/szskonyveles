<?php
session_start();

$vezeteknev = "";
$keresztnev = "";
$email    = "";
$errors = array(); 

// csatlakozás az adatbázishoz
$db = mysqli_connect('localhost', 'id15224852_users', '-r$>mlRonA>3YLJw', 'id15224852_register');
if($db->connect_error){
  die("connection failed: " . $db->connect_error);
}
// regisztrálás
if (isset($_POST['reg_user'])) {
  // adatok bekérése
  $vezeteknev = mysqli_real_escape_string($db, $_POST['vezeteknev']);
  $keresztnev = mysqli_real_escape_string($db, $_POST['keresztnev']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($vezeteknev)) { array_push($errors, "Hiányzik a vezetélneved"); }
  if (empty($keresztnev)) { array_push($errors, "Hiányzik a Keresztneved"); }
  if (empty($email)) { array_push($errors, "Hiányzik az Email"); }
  if (empty($password_1)) { array_push($errors, "Hiányzik a jelszó"); }
  if ($password_1 != $password_2) {
	array_push($errors, "A két jelszó nem eggyezik");
  }


  // ha a fiók még nem létezik
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // ha már létezik a fiók
    if ($user['email'] === $email) {
      array_push($errors, "Ez az Email már foglalt");
    }
  }

  // ha nincs hiba
  if (count($errors) == 0) {
  	$password = md5($password_1);//jelszó kódolása

  	$query = "INSERT INTO users (vezeteknev, keresztnev, email, password) 
  			  VALUES('$vezeteknev', '$keresztnev', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['keresztnev'] = $keresztnev;
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "Sikeres regisztáció";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Hiányzik az email");
    }
    if (empty($password)) {
        array_push($errors, "Hiányzik a jelszó");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['keresztnev'] = $row['keresztnev'];
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "Be vagy jelentkezve";
          header('location: index.php');
        }else {
            array_push($errors, "Roszz felhasználónév/jelszó");
        }
    }
  }
  ?>