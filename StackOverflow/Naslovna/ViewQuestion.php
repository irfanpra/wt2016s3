<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="ViewQuestion.css" type="text/css" />
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
    
    <section>
        <br><br>
      
        <div class="main">
        <div class="question">
           <p> <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/101/malecostume-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
            <b>How can I exit a promise sequence when the array has been processed?</b></p>
            <textarea class="pitanjeTextBox" disabled>
                I've implemented the following code example in a script which loops over an array of results and makes an http request for each one.
                
                function sequence(array, callback) {
                return array.reduce(function chain(promise, item) {
                return promise.then(function () {
                return callback(item);
                });
                }, Promise.resolve());
                };

                var products = ['sku-1', 'sku-2', 'sku-3'];

                sequence(products, function (sku) {
                return getInfo(sku).then(function (info) {
                console.log(info)
                });
                }).catch(function (reason) {
                console.log(reason);
                });

                function getInfo(sku) {
                console.log('Requested info for ' + sku);
                //assume this function makes an http request and returns a  promise
                }

                The script does not exit once all items in the array have been processed. How would I adapt it so that this happens?
            </textarea>

            <div class="points">
                <label class="numberOfLikes">42</label>
                <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                <label class="numberOfDislikes">17</label>
                <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
            </div>

            <br> <br>
            <div class="comments">
                <hr class="linijaKomentar">
                <p class="comment">
                    <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/101/malecostume-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    By the number of upvotes here and in the answers, it looks like git needs to add a git commit --undo option
                </p>
                    <div class="points">
                        <label class="numberOfLikes">13</label>
                        <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                        <label class="numberOfDislikes">4</label>
                        <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    </div>
                

                <br />
                <hr class="linijaKomentar">

                <p class="comment"> <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/supportmale-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                Starting with Git v1.8.4, all the answers below that use HEAD or head can now use @ in place of HEAD instead. See this answer (last section) to learn why you can do that.</p>
                <div class="points">
                    <label class="numberOfLikes">8</label>
                    <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    <label class="numberOfDislikes">0</label>
                    <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                </div>

                <br /> <br />
                <hr class="linijaKomentar">

                <p class="comment"> <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/101/malecostume-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                Amend the commit, and use a gitignore to stop it happening again</p>
                <div class="points">
                    <label class="numberOfLikes">0</label>
                    <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    <label class="numberOfDislikes">0</label>
                    <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                </div>
            </div>

        </div>
        <br /> <br /> 
        <hr class="linija">
        <br>
        <h2>Odgovori</h2>
        <br>

        <div class="question">
                <p>
                    <img class="tacnoSlika" src="https://cdn4.iconfinder.com/data/icons/flat-game-ui-buttons-icons-2/80/1-33-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                </p>
                <textarea class="pitanjeTextBox tacan" disabled>
                    Add/remove files to get things the way you want:

                    git rm classdir
                    git add sourcedir

                    Then amend the commit:

                    git commit --amend

                    The previous, erroneous commit will be edited to reflect the new index state - in other words, it'll be like you never made the mistake in the first place :)

                    Note that you should only do this if you haven't pushed yet. If you have pushed, then you'll just have to commit a fix normally.

                </textarea>

                <div class="points">
                    <label class="numberOfLikes">135</label>
                    <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    <label class="numberOfDislikes">12</label>
                    <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                </div>

                <br> <br>
                <div class="comments">
                    <hr class="linijaKomentar">
                    <div class="comment">
                        <img class="userSlika" src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/supportmale-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                        Does this work when I did a git commit --amend and what I really meant to do is a git commit?
                    </div>
                        <div class="points">
                            <label class="numberOfLikes">28</label>
                            <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                            <label class="numberOfDislikes">3</label>
                            <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                        </div>

                    <br />
                    <hr class="linijaKomentar">

                    <div class="comment">
                        <img class="userSlika" src="https://cdn3.iconfinder.com/data/icons/user-avatars-1/512/users-10-3-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                        @dbm, if you accidentally amended, use git reset --soft oldref, where oldref is the commit ID before the amend. 
                        You can use git reflog to identify the old commit ID. This will undo the effects of the amend, but leave changes staged. Then just do git commit to commit as a regular commit.
                    </div>
                    <div class="points">
                        <label class="numberOfLikes">14</label>
                        <img class="userSlika" src="https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                        <label class="numberOfDislikes">7</label>
                        <img class="userSlika" src="https://cdn2.iconfinder.com/data/icons/zohanimasi-bundle-2/512/unlike-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
                    </div>

                    <br />  
                    <br />
                   
                    </div>
                     <hr class="linija">
                </div>
        <br />
            </div>
        
        <img class="slika" src="http://image.shutterstock.com/z/stock-vector-brain-gears-in-light-bulb-idea-vector-illustration-template-design-137494883.jpg" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
        <img class="slika" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5FT3DfnbOyCiAmEgQMFqjzxVfHNeBFSfUGWA09c-Ck2BWhup5Iw" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
        <img class="slika" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSxIVciAAfRuMmks9pspgfQwEoHIAWYHKDGDilyvxZ-Q1cxYoSs" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />
        <img class="slika" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTt-XGjBozQQAEQbPR_nKCUBUYeCqgev3xrZa9D-g2-ZtlBiEy9" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" />

    </section>

    <footer class="partial">
        <table id="as">
            <tr class="fr">
                <td class="ft"><u>Kontakt</u></td>
                <td class="ft"><u>Pratite nas</u></td>
                <td class="ft"><u>O nama</u></td>
            </tr>
            <tr class="fr">
                <td class="ft">Tel: +38762123456</td>
                <td class="ft"><a href="https://facebook.com/"><img src="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/facebook-128.png" alt="https://cdn2.iconfinder.com/data/icons/fatcow/32x32/http_status_not_found.png" class="ikone"></a></td>
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
