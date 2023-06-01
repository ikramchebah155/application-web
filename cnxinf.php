<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="le site de suivre des ptients ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/cnxinf.css">
    <title>Se connecter</title>
</head>

<body>
    <header>

        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>

        <ul class="menu">

            <a href="accueil.php"><i class="fa-solid fa-house"></i> Accueil</a>
            <a href="contacte.php"><i class="fa-solid fa-address-card"></i> Contacte</a>
            <a href="Apropos.php"><i class="fa-solid fa-circle-info"></i> A Propos de</a>
        </ul>


    </header>
    <section>
        <img style="width:600px ; height:580px; border-radius: 1%;" class="text-center" src="images/ph3.jpg"
            alt="picto_features_2">
        <div class="accueil-inf" style="margin: 100px;">
            <h1>Bienvenue !</h1><br>
            <p>Pour faciliter votre travail et le rendre plus rapide, <br>
                nous vous proposons de vous connecter pour vous pourrez <br>
                ainsi accéder à tous les outils dont vous avez besoin <br>
                en un seul endroit, et gérer vos tâches plus efficacement.
            </p><br>
            <p>N'hésitez pas à vous connecter dès maintenant pour découvrir <br>
                toutes les fonctionnalités à votre disposition.</p><br>
            <a href="#login">Profitez!</a>
        </div>
    </section><br><br><br>
    <main>
        <div class="container" id="login">
            <div class="form-container login-container">
                <form action="cnxinf_post.php" method="post" >
                <i class="fa-sharp fa-solid fa-user-nurse"></i>
                                        <br>
                    
                    <h1>Se connecter</h1>
                    <br><br>
                    <?php if(isset($user_error)){
    echo $user_error;
}  
 ?>

                        
                            <input type="username" name="username" id="username" placeholder="Nom d'utilisateur"><br />

                                <?php if(isset($pass_error)){
    echo $pass_error;
}  
 ?>  

                            <input type="password" name="password" id="password" placeholder="Code de bagde"><br /><br>
                            <input type="submit" name="submit" id="submit" value="Se connecter"><br />
                            
                        </form>
            </div>


        </div>
    </main>
</body>

</html>