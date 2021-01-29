<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
    <title>Szabó Sándorné könyvelés</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/kepek.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/navbar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/email.css'>
    <link rel="stylesheet" type="text/css" href="assets/purecookie.css" async />
    <link rel='stylesheet' type='text/css' media='screen' href='assets/bottomnav.css'>
    <script src="https://kit.fontawesome.com/1d71ea3fec.js" crossorigin="anonymous"></script>
    <script src='assets/sidebar.js'></script>
    <script src='assets/modal.js'></script>
    <script src="assets/purecookie.js" async></script>
</head>
<body>
    <!-- oldalmenü   -->
    <ul class="navbar" id="mynavbar">
        <div class="logo">

            <li><a onclick="mozgas_0()">Szabó Sándorné könyvelés</a></li>
        
        </div>
        <div class="left" id="myleft">
            
            <li><a onclick="mozgas_1()"><i class="fas fa-home"></i>Ismertető</a></li>
            <li><a onclick="mozgas_2()"><i class="fas fa-coins"></i>Ajánlatkérés</a></li>
            <li><a onclick="mozgas_3()"><i class="fas fa-phone"></i>Elérhetőség</a></li>

        </div>
        
        <div class="right" id="myright">
            <a href="javascript:void(0);" class="icon" onclick="navopen()">
            <i class="fa fa-bars"></i>
            </a>
            <?php if (isset($_SESSION['keresztnev'])) { ?>
            <li class="username"><h5>Be vagy jelentkezve</h5><p><?php echo $_SESSION['keresztnev']; ?></p></li>
            <li class="logout"><a href="logout.php">Kijelentkezés</a></li>
            <?php }else{ ?>
            <li><a onclick="Lbtn()">Bejelentkezés </a></li>
            <li><a onclick="Rbtn()">Regisztráció</a></li>
            <?php }?>
        </div>
    </ul>
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
        <form method="post">
        <span onclick="Lclosebtn()" class="closebtn">&times;</span>
        <h1>Bejelentkezés</h1>
        <?php include('errorslog.php'); ?>
  		    <label>Email</label>
  		    <input type="text" name="email" >
  		    <label>Jelszó</label>
  		    <input type="password" name="password">
  		    <button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	        <p>
  		        Nincs még fiókod? <a onclick="Rbtn()" class="changepopup">Regisztálj</a>
  	        </p>
        </form>
        </div>
    <!--  felugró menü (regisztárció)  -->
    <div id="Rpopup" class="popup">
            
        <form method="post">
        <span onclick="Rclosebtn()" class="closebtn">&times;</span>
  	    <h1>Regisztráció</h1>
        <?php include('errors.php'); ?>
  	        <label>Teljes név</label>
            <input type="text" class="divided" placeholder="Vezetéknév" name="vezeteknev" value="<?php echo $vezeteknev; ?>">
            <input type="text" class="divided" placeholder="Keresztnév" name="keresztnev" value="<?php echo $keresztnev; ?>">
  	        <label>Email</label>
  	        <input type="email" name="email" value="<?php echo $email; ?>">
  	        <label>Jelszó</label>
  	        <input type="password" name="password_1">
  	        <label>Jelszó megerősítése</label>
  	        <input type="password" name="password_2">
  	        <button type="submit" class="btn" name="reg_user">Regisztráció</button>
  	        <p>
  		        Van már fiókod? <a onclick="Lbtn()" class="changepopup">Jelentkezz be</a>
  	        </p>
        </form>
     </div>
    <!-- oldal -->
    <div class="kep" >
        <div class="blur" >
            <h1>Szabó Sándorné Könyvelés</h1> 
            <h3>Precíz megbízható könyvelés Baranya megye terültén.</h3>
            <h2>Hívjon most! +36-20-355-0969</h2>
            </div>
        </div >
    <div class="main" id="Ismerteto">
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
                        <li>legyenek vezetve és beadva</li>
                        <li>az illetékes szervek felé.</li>
                    </h3>
                </ul>
                <ul>
                    <h2>Kinek?</h2>
                    <h3>
                        <li>Társas és egyéni</li>
                        <li>vállalkozásoknak, civil</li>
                        <li>szervezeteknek, frissen</li>
                        <li>induló, vagy régebb óta működő</li>
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
        <div class="main1_box">
            
            <?php if(isset($_SESSION['keresztnev'])){?>
            <div class="email_form" style="float:right;">
                <h1>Írj nekünk emailt!</h1>
                <form method="post" action="email.php">
                <input type="text" name="subject" placeholder="Írd ide a Tárgyat" />
                <textarea name="message" placeholder="Írd ide az üzeneted."></textarea>
                <input type="submit" name="email_send" value="Küldés" />
                </form>
            </div>
            <?php }?>
            <h2>Ajánlat kéréshez írjon emailt vagy hívjon minket!</h2>
            <h3>Regisztációt követő bejelentkezés során az oldalról írt levelére gyorsabban reagálunk.</h3>
        </div>
        </div>
    <div class="main2" id="Elerhetoseg">
            <h1>Elérhetőségeink</h1>
            <h2>
                Keressen minket bizalommal könyvelés, bérszámfejtés vagy TB ügyintézés miatt
                akár telefonon, e-mail-ben, vagy személyesen. Munkatársaink rövid időn
                belül választ adnak Önnek bármilyen kérdésére! Árajánlat kérés itt. 
            </h2>
            <h3><i class="fas fa-map-marker-alt"></i>Baranya Megye 7940 Szentlőrinc Deák Ferenc utca 5.</h3>
            <h3><i class="fas fa-phone-alt"></i><a href="tel:06203550969">+06-20-355-0969</a></h3>
            <h3><i class="fas fa-envelope"></i><a href="mailto:szaboskonyveles@gmail.com">szabosandornekonyveles@gmail.com</a></h3>            
        </div>
    
    <!-- oldal alja -->
    <div class="bottomnav">
    
        <div class="bottomnavlist">
            <div class="row">
            <br>
            <h2>Szabó Sándorné könyvelés</h2>
            <ul>
                <li>ADÓSZÁM: 65343018-1-22</li>
                <li>7940 SZENTLŐRINC</li>
                <li>DEÁK FERENC UTCA 5</li>
            </ul>
            </div>
            <div class="row">
            <br>
            <h2>PROFI KÖNYVELÉS</h2>
            <ul>
                <li>Könyvelés</li>
                <li>Adóbevallás</li>
                <li>Bérszámfejtés</li>
                <li>TB és Bérügyintézés</li>
                <li>SZJA bevallás készítése</li>
            </ul>
            </div>
            <div class="row">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.6383550222367!2d17.986725515976044!3d46.03836407911187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742ab1efa0078cf%3A0xc2a877ffe37799ad!2sSzentl%C5%91rinc%2C%20De%C3%A1k%20Ferenc%20u.%205%2C%207940!5e0!3m2!1sen!2shu!4v1609548848837!5m2!1sen!2shu" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
            </div>
        </div>
        <div class="bottomnavlinkek">
            <a onclick="mozgas_1()">Ismertető</a>
            <a onclick="mozgas_2()">Árak</a>
            <a onclick="mozgas_3()">Elérhetőségek</a>
            <?php if(isset($_SESSION['keresztnev'])){?>
            <a href="logout.php">Kijelentkezés</a>
            <?php }else{?>
            <a onclick="Lbtn()">Bejelntkezés</a>
            <a onclick="Rbtn()">Regisztráció</a>
            <?php }?>
        </div>
    </div>
</body>
</html>
