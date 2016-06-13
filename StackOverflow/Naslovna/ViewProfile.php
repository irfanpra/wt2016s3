<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="ViewProfile.css" type="text/css" />
    <link href="Link.css" rel="stylesheet" />
    <title>Main page</title>
</head>
<body>
    <header class="partial">
        <div class="logo">
            <a href="index.html">
                <h1 class="naslov">
                    Stack overflow
                </h1>
            </a>
        </div>
    </header>
    <nav>
        <?php include 'Menu.php';?>
        <input class="desno" id="search" type="search" />
        <label class="desno" for="search">Pretraga</label>
    </nav>
    <br> <br>
    <hr class="gornjiHr">
    <br>
    <br>

    <div class="informacije">
        <table class="tabelaInformacije">
            <tr>
                <td>Ime:</td>
                <td>Edin</td>
                <td rowspan="4">
                    <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/male3-128.png"
                         alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                </td>
            </tr>

            <tr>
                <td>Prezime:</td>
                <td>Džeko</td>
            </tr>

            <tr>
                <td>Email:</td>
                <td>edindzeko@hotmail.com</td>
            </tr>

            <tr>
                <td>Postavljenih pitanja:</td>
                <td>6</td>
            </tr>
        </table>
    </div>

    <br />
    <hr class="gornjiHr" />
    <br />

    <div class="pitanja">
        Pitanja koja ste vi postavili
        <table class="tabela">
            <tr>
                <th class="headerTabele">Broj</th>
                <th class="headerTabele">Pitanje</th>
                <th class="headerTabele">Skillovi</th>
                <th class="headerTabele">Odgovora</th>
                <th class="headerTabele">Sviđanja</th>
            </tr>

            <tr class="neparni">
                <td class="broj">1</td>
                <td class="pitanje">Entity stored procedure - The SqlParameter is already contained by another SqlParameterCollection</td>
                <td class="skill">C#, .NET, SQL</td>
                <td class="odgovori">3</td>
                <td class="likes">22</td>
            </tr>

            <tr class="parni">
                <td class="broj">2</td>
                <td class="pitanje">PHPWord Error loading docx file, 'InvalidArgumentException' with message 'Invalid style'</td>
                <td class="skill">PHP</td>
                <td class="odgovori">11</td>
                <td class="likes">6</td>
            </tr>

            <tr class="neparni">
                <td class="broj">3</td>
                <td class="pitanje">Python 3 Recursion - Maximum Depth Exceeded</td>
                <td class="skill">Python</td>
                <td class="odgovori">7</td>
                <td class="likes">75</td>
            </tr>

            <tr class="parni">
                <td class="broj">4</td>
                <td class="pitanje">AjaxFileUpload — UploadComplete event not firing on test server</td>
                <td class="skill">AJAX</td>
                <td class="odgovori">12</td>
                <td class="likes">-1</td>
            </tr>

            <tr class="neparni">
                <td class="broj">5</td>
                <td class="pitanje">Checkboxes somehow auto uncheck in AngularJS [ionicFramework]</td>
                <td class="skill">Angular JS, Javascript</td>
                <td class="odgovori">25</td>
                <td class="likes">117</td>
            </tr>

            <tr class="parni">
                <td class="broj">6</td>
                <td class="pitanje">HTTP Error 401 on authentication with urllib and post parameters</td>
                <td class="skill">HTTP</td>
                <td class="odgovori">1</td>
                <td class="likes">0</td>
            </tr>

        </table>
    </div>
    <br /> <br />
    <footer class="partial">
        <table id="as">
            <tr class="fr">
                <td class="ft"><u>Kontakt</u></td>
                <td class="ft"><u>Pratite nas</u></td>
                <td class="ft"><u>O nama</u></td>
            </tr>
            <tr class="fr">
                <td class="ft">Tel: +38762123456</td>
                <td class="ft"><a href="https://facebook.com/"><img src="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/facebook-128.png"  alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" class="ikone"></a></td>
                <td class="ft">Dobrodošli na Bh Stack</td>
            </tr>
            <tr class="fr">
                <td class="ft">Email: dcengic2@etf.unsa.ba</td>
                <td class="ft"><a href="https://twitter.com/"><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" class="ikone"></a></td>
                <td class="ft">Ova stranica je namijenjena početnicima u programiranju</td>
            </tr>
            <tr class="fr">
                <td class="ft">Adresa: Neka adresa 22</td>
                <td class="ft"><a href="https://plus.google.com/"><img src="https://cdn0.iconfinder.com/data/icons/social-network-7/50/7-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" class="ikone"></a></td>
                <td class="ft">Trebate savjet ili odgovor na pitanje? Pitajte na Bh Stack</td>
            </tr>
        </table>
    </footer>
</body>
</html>
