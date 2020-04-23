<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inscription Professionnel</title>
</head>
<body class="body-pro-form">
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerce</a>
            <a href="#">Panier</a>
            <a href="#">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main class="main-pro-form">

        <section class="first-section"> 
            <section class="connect">
                <h1>Inscription Professionnel</h1>

                <form action="" method="" class="pro-form">
                    <div>
                        <input  type="password" name="" id="" placeholder="Nom" required>
                        <input type="password" name="" id="" placeholder="Prénom" required>
                    </div>
            
                    <input  type="text" name="" id="" placeholder="Raison Sociale"   required>
            
                    <div>
                    <input type="tel" id="" name="" placeholder="Votre Téléphone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="06-XX-XX-XX-XX" >
                    <input type="number" id="" name="" placeholder="N° de SIRET">
                    </div>

                    <div>
            
                        <input type="email" name="" id="" placeholder="Email" required>
                        <input type="text" name="" id="" placeholder="Confirmation Email" required>
                    </div>
                    <div>
                        <input  type="password" name="" id="" placeholder="Mot de passe" required>
                        <input type="password" name="" id="" placeholder="Confirmation de mot de passe" required>
                    </div>
       
            
                    <input type="text" id="address" name="" placeholder="Adresse du magasin" >
            
                    <div>
                        <input type="number" id="code_postal" name="" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                        <input type="text" id="" name="" placeholder="Ville" required> 
                    </div>
            
                    <input type="text" id="address" name="" placeholder="Adresse siège social" >
            
                    <div>
                        <input type="number" id="code_postal" name="" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                        <input type="text" id="" name="" placeholder="Ville" required> 
                    </div>

                    <button class="valider" type="submit">Valider</button>
        

                </form>
            </section>

            <section class="index-image-shop">
                <img src="src/images/marseilleshop.png" alt="Photo illustration">
            </section>
        </section>


     
    </main>
    
    <footer>
        <nav class="nav_footer">
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerces</a>
            <a href="#">Panier</a>
            <a href="#">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </footer>
</body>
</html>