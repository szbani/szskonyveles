<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
    <title>SzSKonyveles</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/sidebar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style.css'>
    <script src="https://kit.fontawesome.com/1d71ea3fec.js" crossorigin="anonymous"></script>
    <script src='assets/sidebar.js'></script>
    <script src='assets/modal.js'></script>
</head>
<body>
    <!-- oldalmenü   -->
    <div class="button"><span onclick="openNav()">&#9776;</span></div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a onclick="mozgas_1()"><i class="fas fa-home"></i>Ismertető</a>
        <a onclick="mozgas_2()"><i class="fas fa-coins"></i>Árak</a>
        <a onclick="mozgas_3()"><i class="fas fa-phone"></i>Elérhetőség</a>
        <a onclick="mozgas_4()"><i class="fas fa-comment"></i>Értékelések</a>
        
        <div class="Login_Register">
        <button onclick="Lbtn()">Bejelentkezés</button>
        <button onclick="Rbtn()">Regisztráció</button>
        </div>

    </div >
    <!-- sikeres regisztráció -->
    <div class="popup_succes">
        <div class="content">

  	        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
      	        <h3>
                  <p>Sikeres regisztáció <strong><?php echo $_SESSION['username']; ?></strong></p>
                <?php 
          	        echo $_SESSION['success']; 
          	        unset($_SESSION['success']);
                ?>
      	        </h3>
            </div>
  	        <?php endif ?>
        </div>
    </div>

    <!--  felugró menü (bejelentkezés)  -->
    <div id="Lpopup" class="popup">
        <div class="header">
  	    <h2>Bejelentkezés</h2>
        </div>
        <form method="post">
  	    <?php include('errors.php'); ?>
  	    <div class="input-group">
  		    <label>Felhasználónév</label>
  		    <input type="text" name="username" >
  	    </div>
  	    <div class="input-group">
  		    <label>Jelszó</label>
  		    <input type="password" name="password">
  	    </div>
  	    <div class="input-group">
  		    <button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	    </div>
  	        <p>
  		        Nincs még fiókod? <a onclick="Rbtn()" class="changepopup">Regisztálj</a>
  	        </p>
        </form>
    </div>
    <!--  felugró menü (regisztárció)  -->
    <div id="Rpopup" class="popup">
        <div class="header">
            <span onclick="Rclosebtn()" class="closebtn">&times;</span>
  	        <h2>Regisztráció</h2>
        </div>
        <form method="post">
  	    <?php include('errors.php'); ?>
  	    <div class="input-group">
  	        <label>Felhasználónév</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
  	    </div>
  	    <div class="input-group">
  	        <label>Email</label>
  	        <input type="email" name="email" value="<?php echo $email; ?>">
  	    </div>
  	    <div class="input-group">
  	        <label>Jelszó</label>
  	        <input type="password" name="password_1">
  	    </div>
  	    <div class="input-group">
  	        <label>Jelszó megerősítése</label>
  	        <input type="password" name="password_2">
  	    </div>
  	    <div class="input-group">
  	        <button type="submit" class="btn" name="reg_user">Regisztráció</button>
  	    </div>
  	        <p>
  		        Van már fiókod? <a onclick="Lbtn()" class="changepopup">Jelentkezz be</a>
  	        </p>
        </form>
    </div>
    <!-- oldal -->
    <div class="main">
    <div id="Ismerteto" class="page" >
        <div class="page_content">
            <h1>SzSkönyvelés</h1>
            <h2>
                Ha egy megbízható könyvelést keres, akkor jó helyen jár.
                Pécs és környékén kedvező áron segítünk önnek könyvelni és az ügyeit intézni.
            </h2>    
        </div>
        <div id="Arak" class="page_content">
            <h1>Árak</h1>
            <h2>ár1:####</h2>
            <h2>ár2:####</h2>
            <h2>Hosszab távú könyvelésnél lehet ár ajánlatot kérni. </h2>
        </div>
        <div id="comm" class="page_content">
            <h1>Elérhetőség</h1>
            <h2><i class="fas fa-map-marker-alt"></i>Pécs és környéke</h2>
            <h2><i class="fas fa-phone-alt"></i>0620 ###-####</h2>
            <h2><i class="fas fa-envelope"></i>hencz###@gmail.com</h2>
        </div>
        <div id="Ertekelesek" class="page_content">
            <h1>Értékelések</h1>
        </div>
    </div>
    </div>
</body>
</html>
