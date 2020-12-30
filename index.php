<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
    <title>Szabó Sándorné könyvelés</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/sidebar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/kepek.css'>
    <link rel="stylesheet" type="text/css" href="assets/purecookie.css" async />
    <link rel='stylesheet' type='text/css' media='screen' href='assets/bottomnav.css'>
    <script src="https://kit.fontawesome.com/1d71ea3fec.js" crossorigin="anonymous"></script>
    <script src='assets/sidebar.js'></script>
    <script src='assets/modal.js'></script>
    <script src="assets/purecookie.js" async></script>
</head>
<body>
    <!-- oldalmenü   -->
    <div class="sidenav" id="navbar">
            <a onclick="mozgas_0()">Szabó Sándorné könyvelés</a>
            <a onclick="mozgas_1()"><i class="fas fa-home"></i>Ismertető</a>
            <a onclick="mozgas_2()"><i class="fas fa-coins"></i>Árak</a>
            <a onclick="mozgas_3()"><i class="fas fa-phone"></i>Elérhetőség</a>
            
            
            <?php if (isset($_SESSION['keresztnev'])) { ?>
                <div class="right">
                <a href="logout.php" class="logout">Kijelentkezés</a>
                </div>
                <div class="username">
                <h5>Be vagy jelentkezve</h5><p><?php echo $_SESSION['keresztnev']; ?></p>
                </div>
            <?php }else{ ?>
                <div class="right">
                <a onclick="Lbtn()">Bejelentkezés </a>
                <a onclick="Rbtn()">Regisztráció</a>
                </div>
             <?php }?>
                <a href="javascript:void(0);" class="icon" onclick="open()">
                    <i class="fa fa-bars"></i>
                </a> 
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
        <span onclick="Lclosebtn()" class="closebtn">&times;</span>
  	    <h2>Bejelentkezés</h2>
        </div>
        <form method="post">
        <?php include('errorslog.php'); ?>
  	    <div class="input-group">
  		    <label>Email</label>
  		    <input type="text" name="email" >
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
  	    <div class="input-group-user">
  	        <label>Vezetéknév</label>
            <input type="text" name="vezeteknev" value="<?php echo $vezeteknev; ?>">
  	    </div>
        <div class="input-group-user" style="float:right">
            <label>Keresztnév</label>
            <input type="text" name="keresztnev" value="<?php echo $keresztnev; ?>">
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
            <h2>Hívjon most! +36-20-***-****</h2>
            </div>
        </div>
    <div class="main"id="Ismerteto">
        <ul>
            <h3><li>Precizitás és tapasztalat!</li></h3>
            <h2><li>Szakértelem a könyvelésben</li></h2>
            <h3><li>Ne az olcsó könyvelőt válassza, hanem a megbízhatót!</li></h3>
            <h2><li>Az Ön vállalkozása többet érdemel!</li></h2>
            <h3><li>Válassza irodámat</li></h3>
        </ul>
        </div>
    <div class="main3">
        <div class="blur">
            <div class ="main_boxes">
                <ul>
                    <h2>Miért?</h2>
                    <h3>
                        <li>Mert fontos számunkra,</li>
                        <li>hogy az Ön vállalkozása</li>
                        <li>sikeresen működjön úgy,</li>
                        <li>hogy a könyvelése és</li>
                        <li>bevallásai pontosan</li>
                        <li>legyen vezetve és beadva</li>
                        <li>az illetékes szervek felé.</li>
                    </h3>
                </ul>
                <ul>
                    <h2>Kinek?</h2>
                    <h3>
                        <li>Társas és egyéni</li>
                        <li>vállalkozásoknak, civil</li>
                        <li>szervezeteknek, frissen</li>
                        <li>induló, vagy régen működő</li>
                        <li>cégeknek egyaránt.</li>
                    </h3>
                </ul>
                <ul>
                    <h2>Hogyan?</h2>
                    <h3>
                        <li>Naprakész könyveléssel, </li>
                        <li>adó- és üzleti tanácsadással, </li>
                        <li>összesen több mint 20 éves</li>
                        <li>tapasztalattal felvértezve.</li>
                    </h3>
                </ul>
            </div>
        </div>
        </div>    
    <div class="main1" id="Arak">
            <h1>Áraink</h1>
            <h2>Bérszámfejtés: 2.500Ft<br>
                KATA-s vállalkozó: 5.000Ft<br>
                Egyéni vállakozó: 10.000Ft<br>
                Alapítvány, egyéb szervezet: 16.000FT<br>
                Társas vállalkozás(Bt, Kft, stb.): 20.000<br>
                Végelszámolás összköltsége: 80.000Ft</h2>
            <h2>Hívjon és kérjen ár ajánlatot</h2>  
        </div>
    <div class="main2" id="Elerhetoseg">
                    <h1>Elérhetőségeink</h1>
                    <h2>Keressen minket bizalommal könyvelés, bérszámfejtés vagy TB ügyintézés miatt akár telefonon, e-mail-ben, vagy személyesen. Munkatársaink rövid időn belül választ adnak Önnek bármilyen kérdésére! Árajánlat kérés itt. </h2>
                    <h2><i class="fas fa-map-marker-alt"></i>Baranya Megye 7940 Szentlőrinc<br> Deák Ferenc utca 5.</h2><br>
                    <h2><i class="fas fa-phone-alt"></i>+36-20-***-****</h2><br>
                    <h2><i class="fas fa-envelope"></i>szabosandornekonyveles@gmail.com</h2><br>
        </div>
    
    <!-- oldal alja -->
    <div class="bottomnav">
        <div class="bottomnavlist">
            <ul><h2>Szabó Sándorné könyvelés</h2>
                <li>ADÓSZÁM: #######</li>
                <li>7940 SZENTLŐRINC</li>
                <li>DEÁK FERENC UTCA 5</li>
                </ul>
            <ul>
                 <h2>PROFI KÖNYVELÉS</h2>
                <li>Könyvelés</li>
                <li>Adóbevallás</li>
                <li>Bérszámfejtés</li>
                <li>TB és Bérügyintézés</li>
                <li>SZJA bevallás készítése</li>
            </ul>
        </div>
        <div class="bottomnavlinkek">
            <a onclick="mozgas_1()">Ismertető</a>
            <a onclick="mozgas_2()">Árak</a>
            <a onclick="mozgas_3()">Elérhetőségek</a>
            <a onclick="mozgas_4()">Értékelések</a>
        </div>
    </div>
</body>
</html>
