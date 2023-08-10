<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="./assets/css/reset/reset.css"> -->
        <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- mise en place de la police  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php include('../components/nav.php') ?>
    <main>
        <section class="contact">
            <div class="content">
                <h2>Contactez moi</h2>
                <p>Plus on est de fou, plus on rit</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Adresse</h3>
                            <p>Place d'artois, Résidence Ramon,<br>Harnes, France,<br>62440</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Mail</h3>
                            <p>allard.anthony@hotmail.fr</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Téléphone</h3>
                            <p>06-54-89-89-89</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Envoyer un message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required />
                            <span>Nom Prénom</span>
                            <span class="etat"></span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="" required />
                            <span>Email</span>
                            <span class="etat"></span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Ecrivez votre message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Envoyer" />
                            <span class="etat"></span>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </main>
    <script src="../assets/js/index.js"></script>
</body>
</html>