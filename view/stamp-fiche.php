<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/isw1drf.css">
    <!-- alize : regular, demi, bold -->
    <!-- ff-basic-gothic-pro : 300-400-500-600-700 -->
    <!-- urw-antiqua : 400-500-600-700 -->
    <title>Fiche</title>
</head>
<body>
    <nav>
        <a href="{{path}}" class="logo"><span class="square"></span>stampee</a>
        <div class="liens-nav">
            <a href="#" class="nav-item">fonctionnement</a>
            <div class="menu-deroulant">
                <a href="#" class="nav-item nav-item-deroulant">enchères</a>
                <div class="liens-nav-deroulant">
                    <a href="{{path}}/stamp/catalogue">actives</a>
                    <a href="#">choix du lord</a>
                    <a href="#">en vedette</a>
                    <a href="#">passées</a>
                </div>
            </div>
            <a href="#" class="nav-item">actualités</a>
            {% if session == 0 %}
            <a href="{{path}}/user/login" class="nav-item">se connecter</a>
            {% endif %}
            {% if session == 1 %}
            <a href="{{path}}/user/profile" class="nav-item">mon profil</a>
            <a href="{{path}}/user/logout" class="nav-item">se déconnecter</a>
            {% endif %}
        </div>
    </nav>
    <hr class="nav-line">
    <main class="fiche-container">
        <span class="breadcrumbs">accueil > enchères > enchères actives > Lot 21 - 166 “9...</span>
        <span class="favoris"> mes favoris </span>

        <section class="photo-infos">
            <div class="photo">
                <figure class="main-photo">
                    <img src="../../media/stamp1.jpg" alt="timbre">
                    <div class="nav-gauche">&lt;</div>
                    <div class="nav-droite">&gt;</div>
                    <div class="loupe"><div class="loupe-icone"></div></div>
                </figure>
                <figure class="photos-min">
                    <div></div><div></div><div></div><div></div>
                </figure>
            </div>
            <div class="infos">
                <h2>Lot 21 - 166 “90 c. Rose Carmine” (1873 Issue), Unused, OG, VLH, Sound Cond.</h2>
                <div>
                <p>Enchère actuelle : 150$</p>
                <label for="miser" class="invisible"></label>
                <input type="text" id="miser"><button>Miser</button>
                </div>
            </div>
        </section>
        <section class="description">
            <h4>Description ⟶</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
        <section class="details">
            <div>
                <h4>Condition</h4>
                <p>F/VF used</p>
            </div>
            <div>
                <h4>Condition</h4>
                <p>F/VF used</p>
            </div>
            <div>
                <h4>Condition</h4>
                <p>F/VF used</p>
            </div>
            <div>
                <h4>Condition</h4>
                <p>F/VF used</p>
            </div>
            <div>
                <h4>Condition</h4>
                <p>F/VF used</p>
            </div>
        </section>
    </main>
    <hr class="footer-line">
    <footer>
        <section>
            <h6>Mon compte</h6>
            <ul>
                <li>Devenir Membre</li>
                <li>Se connecter</li>
                <li>Termes et conditions</li>
            </ul>
        </section>
        <section>
            <h6>À propos du Lord Reginald Stampee III</h6>
            <ul>
                <li>La philatélie, c’est la vie</li>
                <li>Biographie du Lord</li>
                <li>Historique Familial</li>
            </ul>
        </section>
        <section>
            <div class="logo">
            <a href="index.html" class="logo"><span class="square"></span>stampee</a>
            </div>
        </section>
        <section>
            <h6>Liens Utiles</h6>
            <ul>
                <li>Actualités</li>
                <li>Fonctionnement de la plateforme</li>
                <li>Contacter le webmestre</li>
            </ul>
        </section>
        <section>
            <h6>Contactez-nous</h6>
            <ul>
                <li>Angleterre</li>
                <li>Canada</li>
                <li>États-unis</li>
                <li>Australie</li>
            </ul>
        </section>
    </footer>
</body>
</html>