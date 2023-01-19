<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}/../css/main.css">
    <title>Mon profil</title>
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
            <a href="{{path}}/user/profile" class="nav-item">mon profil</a>
            <a href="{{path}}/user/logout" class="nav-item">se déconnecter</a>
        </div>
    </nav>
    <hr class="nav-line">
    <main>
        <h3>Mon profil</h3>
        <h5>{{ user.username }}</h5>
        <p>mon courriel : {{ user.email }}</p>
        <a href="{{path}}/user/edit">modifier mes informations</a>
        <a href="{{path}}/user/editpw">modifier mon mot de passe</a>
        <form action="delete" method="post">
        <input type="hidden" name="user_id" value="{{ user.user_id }}">
        <input type="submit" value="supprimer mon compte">
        </form>
    </main>
</body>
</html>