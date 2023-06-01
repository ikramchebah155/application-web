<?php
include('core/connection.php');

if(isset($_POST['submit'])){
    $username =stripcslashes( strtolower( $_POST['username'])); 
    $email =stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $phone = stripcslashes($_POST['phone']);
    $adresse = stripcslashes($_POST['adresse']);
    $service = stripcslashes($_POST['service']);
    $curg = stripcslashes($_POST['curg']);
    $nurg = stripcslashes($_POST['nurg']);
    $rurg = stripcslashes($_POST['rurg']);

    if(isset($_POST['birthday_month']) && isset($_POST['birthday_day']) && isset($_POST['birthday_year'])){
      $birthday_month = (int)$_POST['birthday_month'] ;
      $birthday_day =(int)$_POST['birthday_day'] ;
      $birthday_year =(int)$_POST['birthday_year'] ;
      $birthday = htmlentities(mysqli_real_escape_string($conn,$birthday_day.'-'.$birthday_month .'-'. $birthday_year));
    }

    $username =htmlentities(mysqli_real_escape_string($conn,$_POST['username'] ));
    $email =htmlentities(mysqli_real_escape_string($conn,$_POST['email'] ));
    $password =htmlentities(mysqli_real_escape_string($conn,$_POST['password'] ));
    $md5_pass = md5($password);
    $phone =htmlentities(mysqli_real_escape_string($conn,$_POST['phone'] ));
    $adresse =htmlentities(mysqli_real_escape_string($conn,$_POST['adresse'] ));
    $service =htmlentities(mysqli_real_escape_string($conn,$_POST['service'] ));
    $curg =htmlentities(mysqli_real_escape_string($conn,$_POST['curg'] ));
    $nurg =htmlentities(mysqli_real_escape_string($conn,$_POST['nurg'] ));
    $rurg =htmlentities(mysqli_real_escape_string($conn,$_POST['rurg'] ));


    
    if(isset($_POST['gender'])){
      $gender = ($_POST['gender']);
      $gender =htmlentities(mysqli_real_escape_string($conn,$_POST['gender']));
      if(!in_array($gender,['homme','femme'])){
        $gender_error ='<p id="error" >choisiez sexe!<p> ';
        $err_s = 1;
      }
    }
  
    $check_user = "SELECT * FROM `patient` WHERE username ='$username'";
    $check_result = mysqli_query($conn,$check_user);
    $num_rows = mysqli_num_rows($check_result);
    if($num_rows !=0){
      $user_error='<p id="error" > username deja utilisier<p>';
      $err_s = 1;
    }



    if(empty($username)){
      $user_error ='<p id="error" > Entrez le nom dutilisateur <p> ';
      $err_s =1;
    }
    elseif(strlen($username)<6){
      $user_error = '<p id="error" > Le nom dutilisateur est faible <p>';
      $err_s =1;

    }
    elseif(filter_var($username,FILTER_VALIDATE_INT)){
      $user_error ='<p id="error" >Entrez un vrai nom dutilisateur <p>';
      $err_s =1;
    }
    if(empty($email)){
      $email_error ='<p id="error" >Entrez email<p> ';
      $err_s =1;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $email_error ='<p id="error" >Entrez un vrai email <p>';
      $err_s =1;
    }
    if(empty($phone)){
      $phone_error ='<p id="error" > Entrez le numero de telephone <p> ';
      $err_s =1;
    }
    
    elseif(strlen($phone)<10){
      $phone_error = '<p id="error" > Le numero de telephone est faux <p>';
      $err_s =1;

    }
    if(empty($adresse)){
      $adresse_error ='<p id="error" > Entrez adresse <p> ';
      $err_s =1;
    }
    if(empty($service)){
      $service_error ='<p id="error" > Entrez quelle service  <p> ';
      $err_s =1;
    }
    if(empty($curg)){
      $curg_error ='<p id="error" >Entrez la personne à contacter en cas durgence  <p> ';
      $err_s =1;
    }
    if(empty($nurg)){
      $nurg_error ='<p id="error" >Entrez le numero à contacter en cas durgence  <p> ';
      $err_s =1;
    }
    if(empty($rurg)){
      $rurg_error ='<p id="error" >Entrez le lien familial  <p> ';
      $err_s =1;
    }
    if(empty($gender)){
      $gender_error ='<p id="error" >choisiez le sexe <p>';
      $err_s =1;
    }
    if(empty($birthday)){
      $birthday_error ='<p id="error" >Entrez la date de naissance<p> ';
      $err_s =1;
    }
    if(empty($password)){
      $password_error ='<p id="error" >Entrez le mot de passe<p>';
      $err_s =1;
      include('creerfichier.php');
    }
    elseif(strlen($password)<6){
      $password_error = '<p id="error" >Le mot de passe est faible<p> ';
      $err_s =1;
include('creerfichier.php');
    }
    else{
      if(($err_s==0) && ($num_rows ==0)){
        $sql = "INSERT INTO patient (username,email,password,birthday,gender,md5_pass,phone,adresse,service,curg,nurg,rurg) 
        VALUES ('$username','$email','$password','$birthday','$gender','$md5_pass','$phone','$adresse','$service','$curg','$nurg','$rurg')";
        mysqli_query($conn,$sql);
        
        // Redirect to the desired page with success message
              header('location: creerfichier.php?success=true');
      }
      else{

        include('creerfichier.php');
      }
    }

}

?>

