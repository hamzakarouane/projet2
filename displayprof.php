<?php 
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Professeurs</title>
    <style>
        .content-table{
            border-collapse: collapse;
            margin: 25px;
            font-size: 0.7em;
            min-width:1300px;
            border-radius:5px 5px 0 0;
            overflow : hidden;
            box-shadow : 0 0 20 px rgba(0,0,0,0,15);
        }

        .content-table thead tr{
            background-color:#016953;
            color:#ffffff;
            text-align: left;
            font-weight:bold;
        }

        .content-table th,
        .content-table td{
            padding: 12px 15px;
        }

        .content-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(odd){
            background-color:#f3f3f3;
        }

        .content-table tbody tr:last-of-type{
             border-bottom: 2px solid #009879;
        }

        


        .content-table2{
            border-collapse: collapse;
            margin: 25px;
            font-size: 0.7em;
            min-width:1300px;
            border-radius:5px 5px 0 0;
            overflow : hidden;
            box-shadow : 0 0 20 px rgba(0,0,0,0,15);
        }

        .content-table2 thead tr{
            background-color:#009879;
            color:#ffffff;
            text-align: left;
            font-weight:bold;
        }

        .content-table2 th,
        .content-table2 td{
            padding: 12px 15px;
        }

        .content-table2 tbody tr{
            border-bottom: 1px solid #dddddd;
        }

        .content-table2 tbody tr:nth-of-type(odd){
            background-color:#f3f3f3;
        }

        .content-table2 tbody tr:last-of-type{
             border-bottom: 2px solid #009879;
        }
    </style>
</head>
<body style="background-color:#c1e8e0">
    <h3>--> INFORMATIONS PERSONNELLES :<h3>
    <table class="content-table">
        <thead>
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Email</th>
         </tr>
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id='$id'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $username = $row['username'];
                      $email = $row['email'];
                      echo '
                           <tr>
                             <td>'.$id.'</td>
                             <td>'.$username.'</td>
                             <td>'.$email.'</td>
                             </tr>       
                      ';
                  }   
              }        
           ?>

        </tbody>

        <thead>
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Specialite</th>
         </tr>  
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id='$id'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $nom = $row['nom'];
                      $prenom = $row['prenom'];
                      $specialite = $row['specialite'];
                   
                      echo '
                           <tr>
                             <td>'.$nom.'</td>
                             <td>'.$prenom.'</td>
                             <td>'.$specialite.'</td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
        </tbody>
        </table>
        <!-- #016953 -->
         <h3>--> DOSSIERS :<h3>
        <table class="content-table2">
        <thead>
        <tr>
        <th>Dossier Academique</th>
        <th>Dossier Scientifique</th>
        <th>Dossier Pedagogique</th>
        </tr>
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id='$id'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $dossieracademique = $row['dossieracademique'];
                      $dossierscientifique = $row['dossierscientifique'];
                      $dossierpedagogique = $row['dossierpedagogique'];
                      echo '
                           <tr>
                             <td>'.$dossieracademique.'</td>
                             <td>'.$dossierpedagogique.'</td>
                             <td>'.$dossierscientifique.'</td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
        </tbody>

        <thead>
        <tr>
        <th>Etat Dossier Academique</th>
        <th>Etat Dossier Scientifique</th>
        <th>Etat Dossier Pedagogique</th>
        </tr>
        </thead>  

        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id='$id'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $etatacademique = $row['etatacademique'];
                      $etatscientifique = $row['etatscientifique'];
                      $etatpedagogique = $row['etatpedagogique'];
                      echo '
                           <tr>
                             <td>'.$etatacademique.'</td>
                             <td>'.$etatscientifique.'</td>
                             <td>'.$etatpedagogique.'</td>
                              </tr>
                             <td>
                             <button class="btn btn-primary"><a href="welcome.php" class="text-light">edit</a></button> 
                             </td>
                             <td>
                             <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'" >delete</a></button> 
                             </td>
                             <td>
                             <button  class="btn btn-warning">  <a class="text-light" href="logout.php">Logout</a> </button>
                             <td>
                             </tr>       
                      ';
                  }   
              }        
           ?>

        </tbody>


        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
</body>
</html>