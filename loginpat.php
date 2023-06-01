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
    
    <title>Se connecter</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400;0,500;0,600;1,400;1,500;1,700&display=swap');
*{
    margin : 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Familjen Grotesk', sans-serif;
    
}
header{
    display:flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 5%;
    position: fixed;
    gap: 60px;
    background-color: #ffffff;
    background: #ffffff;
    width: 100%;
}
header.logo{
    font-size: 25px;
}
header .logo span{
    color: #5e8dbb;
    font-size: 26px;
}
header .menu a{
    position: relative;
    margin:0 10px ;
    text-decoration: 0;
    color: #755f5f;
    transition: 0.5s;
    

}
header .menu a::before{
    position: absolute;
    top: -2px;
    content: "";
    width: 0;
    height: 2px;
    background-color: #93ded0 ;
    transition: 0.5s;
 }
 header .menu  a:hover:before{
    width: 100%;
}
header .menu  a:hover{
    color: #000;
}

 main{
    display: flex;
    justify-content:center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    
    
}
.container{
    position: relative;
    overflow: hidden;
    height: 500px;
    width: 500px;
    max-width: 100%;
    top: 40px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(68, 27, 92, 0.45) , 0 8px 8px rgba(148, 54, 192, 0.45);
}
.form-container{
    position: absolute;
    top: 20px;
    left: 70px;
    height: 100%;


}

form{
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 10px;
    text-align: center;
    height: 90%;
    
    }
    .login-container i{
        font-size: 40px;
    }
    .login-container h1{
        color: #0e0c0c;
        font:2rem ;
        font-family:'Times New Roman', Times, serif;
        
        
    }
    .login-container input{
        color: rgb(8, 8, 8);
        font-size: medium;
        background: transparent;
        width:300px ;
        height: 32.5px ;
        margin: 15px 0;
        padding: 5px 0 5px 30px;
        border-top:none ;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid #070707; 
    }
.login-container input:focus{
    outline: none;
}
::placeholder{
    color: rgb(0, 0, 0);
    font-family: Arial, Helvetica, sans-serif;
    font-size: medium;
}
.error-message {
    display: none;
    color: red;
  }
  
  input:invalid + .error-message {
    display: block;
  }
  
  
  


 
.login-container a:hover{
    color: blue;
    letter-spacing: 1px ;

    

}

input[type="submit"]{
    text-decoration: 0;
            border: 2px solid #181a1b;
            color:#040505 ;
            border-radius: 6px;
            padding: 5px 20px;
            margin-top: 5px;
            font-weight: 400;
            text-transform: capitalize;
            transition: 0.5s;
            cursor: pointer;
        
}
input[type="submit"]:hover{
    background-color: #1e2022;
            color: #fff;
            letter-spacing: 1px;
}

        #error{
    
    color: red;
    padding: 4px;
    
}
    </style>
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
    
    
    <main>



        <div class="container" id="login">
            <div class="form-container login-container">
            <form action="cnxpat_post.php" method="post">
                    <div class="main">
                    <i class="fa-solid fa-user"></i>
                        <h1><i>Se connecter</i> </h1>

                        <br /><br />
                        

<?php if(isset($user_error)){
    echo $user_error;
}  
 ?>

                        
                            <input type="username" name="username" id="username" placeholder="Nom d'utilisateur"><br />

                                <?php if(isset($pass_error)){
    echo $pass_error;
}  
 ?>  

                            <input type="password" name="password" id="password" placeholder="mot de passe"><br /><br>
                            <input type="submit" name="submit" id="submit" value="Se connecter"><br />
                            <br>
                    <p>Vous avez oublié votre mot de passe ?
                        <a href="#"> Récupérez-le</a>

                    </p><br>
                    
                        </form>
            </div>


        </div>
    </main>
</body>

</html>