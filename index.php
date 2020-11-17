<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
    <title>SzSKonyveles</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/sidebar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/modal_login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/modal_reg.css'>
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
    
    <!--  felugró menü (bejelentkezés)  -->
    <div id="Lmodal" class="modal_log">
        <div class="modal_content2_log">
            <span onclick="Lclosebtn()" class="close">&times;</span>
            <label class="log_label"><h2>Bejelentkezés</h2></label>
        </div>
        <div class="modal_content_log">
            <br>
            <label class="log_label" for="E">Email</label>
            <br>
            <input class="log_mezo" type="text" id="Email" name="E" placeholder="Email">
            <br>
            <br>
            <label class="log_label" for="pass">Jelszó</label>
            <br>
            <input class="log_mezo" type="password" id="Password" name="pass" placeholder="Jelszó">
            <br>
            <br>
        </div>
        <div class="modal_content2_log">
            <button class="log_button">Bejelentkezés</button>
        </div>
    </div>
    <!--  felugró menü (regisztárció)  -->
    <div id="Rmodal" class="modal_reg">
        <div class="modal_content2_reg">
            <span onclick="Rclosebtn()" class="close">&times;</span>
            <label><h2>Regisztárció</h2></label>
        </div>
        <div class="modal_content_reg">
            <label class="reg_label" for="nev1">Keresztnév<span class="req">*</span></label>
            <br>
            <input class="reg_mezo" type="text" id="Password" name="nev1" placeholder="Keresztnév">
            <br>
            <label class="reg_label_2" for="nev2">Vezetéknév<span class="req">*</span></label>
            <br>
            <input class="reg_mezo_2" type="text" id="Password" name="nev2" placeholder="Vezetéknév">
            <br>
            <br>
            <label class="reg_label" for="E">Email<span class="req">*</span></label>
            <br>
            <input class="reg_mezo_email" type="text" id="Email" name="E" placeholder="Email">
            <br>
            <br>
            <label class="reg_label" for="pass">Jelszó<span class="req">*</span></label>
            <br>
            <input class="reg_mezo" type="password" id="Password" name="pass" placeholder="Jelszó">
            <br>
            <label class="reg_label_2" for="pass2">Jelszó megerősítése<span class="req">*</span></label>
            <br>
            <input class="reg_mezo_2" type="password" id="Password" name="pass2" placeholder="Jelszó">
        </div>
        <div class="modal_content2_reg">
            <button class="reg_button">Regisztráció</button>
        </div>
    </div>

    <!-- oldal -->
    <div>
    <div id="Ismerteto" class="main">
        <h1>SzSkonyveles</h1>
        <h2>
            Ha egy megbízható könyvelést keres, akkor jó helyen jár.<br>
            Pécs és környékén kedvező áron segítünk önnek könyvelni és az ügyeit intézni.
        </h2>    
    </div>
    <div class="price_comm">
        <div id="Arak" class="price">
            <h1>Árak</h1>
            <h2>ár1:####</h2>
            <h2>ár2:####</h2>
            <h2>Hosszab távú könyvelésnél lehet ár ajánlatot kérni. </h2>
        </div>
        <div id="Elerhetoseg" class="comm">
            <h1>Elérhetőség</h1>
            <h2><i class="fas fa-map-marker-alt"></i>Pécs és környéke</h2>
            <h2><i class="fas fa-phone-alt"></i>0620 ###-####</h2>
            <h2><i class="fas fa-envelope"></i>hencz###@gmail.com</h2>
        </div>
    </div>
    <div id="Ertekelesek" class="rate"><h1>Értékelések</h1></div>
	</div>
</body>
</html>
