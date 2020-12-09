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
    <div class="sidenav">
        <div class="user_information">
            <?php if (isset($_SESSION['username'])) { ?>
                <strong><p class="username"><?php echo $_SESSION['username']; ?></strong></p>
                <a href="logout.php" class="logout">Kijelentkezés</a>

            <?php }else{ ?>

                <button onclick="Lbtn()">Bejelentkezés</button><br>
                <button onclick="Rbtn()">Regisztráció</button>
            <?php }?>
        </div>
        <div class="sidenav_btns">
            <a onclick="mozgas_1()"><i class="fas fa-home"></i>Ismertető</a>
            <a onclick="mozgas_2()"><i class="fas fa-coins"></i>Árak</a>
            <a onclick="mozgas_3()"><i class="fas fa-phone"></i>Elérhetőség</a>
            <a onclick="mozgas_4()"><i class="fas fa-comment"></i>Értékelések</a>
        </div>
    </div>
    <!-- sikeres regisztráció -->
    <div id="popup_succes" class="popup_succes">
        <div class="content_succes">
  	        <?php if (isset($_SESSION['success'])) { ?>
            <div class="error success" >
                <script type="text/javascript">
                popup_succes();
                </script>
      	        <h3>                
                <?php
          	        echo $_SESSION['success'];
                ?>
                </h3>
            </div>
              <?php }?>
        </div>
    </div>

    <!--  felugró menü (bejelentkezés)  -->
    <div id="Lpopup" class="popup">
        <div class="header">
  	    <h2>Bejelentkezés</h2>
        </div>
        <form method="post">
  	    <?php include('errorslog.php'); ?>
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
    <div class="kep">
        <div class="blur">
        <h1>SzSkönyvelés</h1> 
        <h3>Precíz megbízható könyvelés Baranya megye terültén.</h3>
        </div>
    </div>
        <div class="main">
         <div class="main_content">
            <div id="Ismerteto" class="page_content">
                    <h1>SzSkönyvelés</h1>
                    <h2>
                        Ha egy megbízható könyvelést keres, akkor jó helyen jár.
                        Baranya megye és környékén kedvező áron segítünk önnek könyvelni és az ügyeit intézni.
                    </h2>    
            </div>
        </div>
        </div>
        <div class="main1">
            <div class="main1_content">
                <div id="Arak" class="page_content">
                    <h1>Árak</h1>
                    <h2>ár1:####</h2>
                    <h2>ár2:####</h2>
                    <h2>Hosszab távú könyvelésnél lehet ár ajánlatot kérni. </h2>
                </div>
            </div>
        </div>
        <div class="main2">
        <div class="main2_content">
            <div id="Elerhetoseg" class="page_content">
                    <h1>Elérhetőség</h1>
                    <h2><i class="fas fa-map-marker-alt"></i>Pécs és környéke</h2>
                    <h2><i class="fas fa-phone-alt"></i>0620 ###-####</h2>
                    <h2><i class="fas fa-envelope"></i>hencz###@gmail.com</h2>
            </div>
            </div>
        </div>
        <div class="main3">
            <div class="main3_content">
                <div id="Ertekelesek" class="page_content">
                    <h1>Értékelések</h1>
                </div>
            </div>
        </div>
</body>
</html>
