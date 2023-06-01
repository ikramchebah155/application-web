<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="le site de suivre des ptients ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/accueil.css">
    <title>Accueil</title>
</head>

<body>
    <header>
      
        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
   
        <ul class="menu">
         
         <a href="accueil.php"><i class="fa-solid fa-house"></i> Accueil</a>
         <a href="comunni.php"><i class="fa-solid fa-address-card"></i> Contacte</a>
         <a href="apropos.php"><i class="fa-solid fa-circle-info"></i> A Propos de</a>
            </ul>
            
       
    </header>

    <main>
        <div class="container" >
            <div class="form-container bienvenue-container">
            <form action="#">
            <h1>Bienvenue!</h1>
            <br><br><br>
            <p><span> Engagé pour</span> des soins de santé de confiance</p>
            </form>
            </div>
    
    
            
    
    
           <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <br><br>
                <h1>Etes-vous...?</h1><br>
    
                 <a href="cnxadmin.php"><i class="fa-solid fa-user-lock"></i> Chef service  </a><br><br><br>
                 <a href="cnxmed.php"><i class="fa-solid fa-user-doctor"></i> Medecin </a><br><br><br>
                 <a href="cnxinf.php" ><i class="fa-sharp fa-solid fa-user-nurse"></i> Infermier </a><br><br><br>
                 <a href="cnxpat.php"><i class="fa-solid fa-user"></i> Patient  </a>
                 
              </div>
              
    
              </div>
            </div>
             
    
    
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</body>
</html>