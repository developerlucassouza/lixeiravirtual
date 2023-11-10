<?php
include_once '../../header.php';
?>

<style>
    body {
        padding-bottom: 100px;
    }
    h2 {
        background-color: black;
        color: white;
        margin: 0;
        padding: 10px;
        text-align: center;
    }

    div.col-md-4 {
        align-items: center;
        margin: 10px 0;
    }

    img {
        display: block;
        margin: 50px auto;
        width: 80%;
    }

    #sos {
        margin-top: 100px;
    }

    @media screen and (orientation: portrait) {
        main {
            max-width: 90vw;
        }
    }
</style>

<div id="espaco"></div>

<main id="sos" class="container">

    <h2>Windows</h2>

    <div class="row">
        <div class="col-md-4"><a href="win11.php"><img src="logos_so/logo_win11.png" alt="Windows 11"></a></div>
        <div class="col-md-4"><a href="win10.php"><img src="logos_so/logo_win10.png" alt="Windows 10"></a></div>
        <div class="col-md-4"><a href="win8.1.php"><img src="logos_so/logo_win8.png" alt="Windows 8.1"></a></div>
    </div>

    <div class="row">
        <div class="col-md-4"><a href="win7.php"><img src="logos_so/logo_win7.png" alt="Windows 7"></a></div>
        <div class="col-md-4"><a href="winxp.php"><img src="logos_so/logo_winxp.png" alt="Windows XP"></a></div>
        <div class="col-md-4"></div>
    </div>

    <h2>Linux</h2>

    <div class="row">
        <div class="col-md-4"><a href="ubuntu.php"><img src="logos_so/logo_ubuntu.png" alt="Ubuntu"></a></div>
        <div class="col-md-4"><a href="linuxmint.php"><img src="logos_so/logo_linuxmint.png" alt="Linux Mint"></a>
        </div>
        <div class="col-md-4"><a href="kalilinux.php"><img src="logos_so/logo_kalilinux.png" alt="Kali Linux"></a>
        </div>
    </div>

    <h2>Hiren's Boot</h2>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="hirensboot.php"><img src="logos_so/logo_hirensboot.png" alt="Hiren's Boot"></a>
        </div>
        <div class="col-md-4"></div>
    </div>

</main>

<?php
include_once '../../footer.php';
?>