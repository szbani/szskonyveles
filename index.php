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
    <link rel='stylesheet' type='text/css' media='screen' href='assets/kepek.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/bottomnav.css'>
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
        <h1>Szabó Sándorné Könyvelés</h1> 
        <h3>Precíz megbízható könyvelés Baranya megye terültén.</h3>
        <h2>Hívjon most! +36-20-284-4288</h2>
        </div>
    </div>
        <div class="main">
            <div class="page"id="Ismerteto">
                <div class="kep1"><div class="blur"></div></div>
                    <div class="kepmellet" style="background-color: rgba(255, 255, 255, 0.1)">
                        <ul>
                            <h2>
                                <li>Több mint 20 éves könyvelő, könyvelés tapasztalat</li>
                                <li>Új vállalkozások könyvelés specialistája. Kft., Bt.,<br> egyéni vállalkozások könyvelése</li>
                                <li>Megbízhatóság, kedvező árak</li>
                                <li>Garancia a büntetések elkerülésére, precíz munka határidőre</li>
                                <li>Naprakészek vagyunk a NAV jogszabályokban</li>
                                <li>Leinformálható referenciák, kedvező könyvelés árak</li>
                            </h2>
                        </ul>
                    </div>
                
            </div>
        </div>
        <div class="main1">
            <div class="page">
                <div id="Arak" class="page_content">
                    <h1>Ár</h1>
                    <h2>Bérszámfejtés: 2.500Ft<br>
                    KATA-s vállalkozó: 5.000Ft<br>
                    Egyéni vállakozó: 10.000Ft<br>
                    Alapítvány, egyéb szervezet: 16.000FT<br>
                    Társas vállalkozás(Bt, Kft, stb.): 20.000<br>
                    Végelszámolás összköltsége: 80.000Ft</h2>
                    <h2>Hívjon és kérjen ár ajánlatot</h2>
                </div>
            </div>
        </div>
        <div class="main2">
        <div class="page">
            <div id="Elerhetoseg" class="page_content">
                    <h1>Elérhetőség</h1>
                    <h2><i class="fas fa-map-marker-alt"></i>Baranya megye és környéke</h2><br>
                    <h2><i class="fas fa-phone-alt"></i>+36-20-284-4288</h2><br>
                    <h2><i class="fas fa-envelope"></i>henczzsu@gmail.com</h2><br>
            </div>
            </div>
        </div>
        <div class="main3">
            <div class="page">
                <div id="Ertekelesek" class="page_content">
                    <h1>Értékelések</h1>
                </div>
            </div>
        </div>
        <div class="bottomnav">

        </div>
</body>
</html>
