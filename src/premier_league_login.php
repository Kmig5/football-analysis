<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SecretLabs</title>
    <link rel="stylesheet" href="Css/connexion-inscription.css">
    <link rel="icon" href="azimut3.png" type="image/pjg">
    <script src="https://kit.fontawesome.com/e345f125f8.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("load", function() {
            var loader = document.getElementById("loader");
            var content = document.getElementById("content");

            setTimeout(function() {
                loader.style.display = "none";
                content.style.display = "block";
            }, 1000);
        });
    </script>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <div id="content">
    <header>
        <a href="/"><img src="azimut3.png" alt="logo de secretlabs"></a>
        <a href="/">SecretLabs</a>
    </header>
    <section class="container">
        <div class="title">
            <img src="globe.png"></img>
            <p> Avec GajeLabs School,etudiez et resevez un ensignement de qualité</p>
        </div>
        <form action="connexion.php" method="post" class="formulaire">
            <h2 class="connexion">connexion</h2>
             <div id="error_message" style="display: none;"></div> 
                <script src="js/Test.js"></script>
            <input type="username" placeholder="Nom d'utilisateur" name="username" required>
            <input type="password" placeholder="Mot de passe" name="password" required>
            <input type="submit" value="se connecter" class="btn-submit">
            <a class="mdp-oublie" href="">Mot de passe oublié ?</a>
            <hr>

        </form>
    </section>
   
    <script>
        function afficher(){
            document.querySelector('.inscription').classList.toggle('active')
        }
    </script>

<footer class="footer">
    <div class="container-2">
    <div class="social-icons">
        <a href="">
            <img src="img/facebook.png"
            alt="Facebook">
        </a>
        <a href="">
            <img src="img/twitter.png"
            alt="Twitter">
        </a>
        <a href="">
            <img src="img/logo-linkedin.png"
            alt="Linkedln">
        </a> 
    </div>
    <span class="copyright">
        Tous droits réservés &copy; 2026 azimut solution 
    </span>
</div>
</footer>
</div>
</body>
</html>
