<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SarajevoDanas</title>

        <link rel="shortcut icon" type="image/png" href="./../images/favicon.png"/>

        <link rel="stylesheet" type="text/css" href="./../styles/header.css">
        <link rel="stylesheet" type="text/css" href="./../styles/logo-scaled.css">
        <link rel="stylesheet" type="text/css" href="./../styles/stat.css">
    </head>

    <body>

        <?php include('./../scripts/session.php') ?>

        <table class="index-header" id="header">
            <tr>
                <td>
                    <h1>SarajevoDanas - saznaj šta se dešava u tvom gradu!</h1>
                </td> <td id="logo-cell">
                    <div class="logo-scaled-wrapper" id="index-logo">
                        <div class="logo-scaled-line-top"></div>
                        <div class="logo-scaled-base"></div>
                        <div class="logo-scaled-line-bot"></div>
                        <div class="logo-scaled-line-behind"></div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="navbar" id="index-navbar">
    <!--            <div class="logo"></div> -->
            <table>
                <tr>
                    <td>
                        <a href="./../index.php">
                         Naslovnica
                     </td>
                    <td class="active">
                            Statistika
                        </a>
                    </td>
                    <td> <a href="./../pages/about.php">
                            O nama
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/contact.php">
                            Kontakt
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/login.php">
                            Login
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/admin.php">
                            Admin panel
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="admin-text">
            <?php
                echo $okMsg;
                echo $logoutButton;
            ?>
        </div>
        <div>
            <table id="stat-table">
                <tr>
                    <th>&nbsp;</th>
                    <th>2013</th>
                    <th>2014</th>
                    <th>2015</th>
                    <th>2016</th>
                </tr>
                <tr class="odd">
                    <th class="left-border odd">Ispod 18 godina</th>
                    <td>30%</td>
                    <td>40%</td>
                    <td>34%</td>
                    <td>32%</td>
                </tr>
                <tr class="even">
                    <th class="left-border even">Između 18 i 25</th>
                    <td>47%</td>
                    <td>45%</td>
                    <td>53%</td>
                    <td>53%</td>
                </tr>
                <tr class="odd">
                    <th class="left-border">Između 25 i 35</th>
                    <td>18%</td>
                    <td>10%</td>
                    <td>7%</td>
                    <td>14%</td>
                </tr>
                <tr class="even">
                    <th class="left-border">Stariji od 35</th>
                    <td>5%</td>
                    <td>5%</td>
                    <td>6%</td>
                    <td>1%</td>
                </tr>
            </table>
        </div>
    </body>
</html>
