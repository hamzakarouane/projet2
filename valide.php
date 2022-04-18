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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>Display Professeurs</title>
</head>
<body style="background-color: white;">
    <div style="width: 80%;">
        <h3>Dossier Academique :</h3>
    </div>
    <div style="width: 100%;">
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>dossier academique</th>
            <th>etat </th>
            <th>Details</th>
        </tr> 
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id!=1 and etatacademique='valide'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $nom = $row['nom'];
                      $prenom = $row['prenom'];
                      $dossieracademique = $row['dossieracademique'];
                      $etatacademique = $row['etatacademique'];
                      echo '
                           <tr>
                             <td>'.$nom.'</td>
                             <td>'.$prenom.'</td>
                             <td>'.$dossieracademique.'</td>
                             <td>'.$etatacademique.'</td>
                             <td>
                             <button class="btn btn-primary"><a class="text-light" href="details.php?detailsid='.$id.'">details</a></button> 
                             </td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
           
        </tbody>
    </table>

   </div>



   <div style="width: 80%;">
        <h3>Dossier Scientifique :</h3>
    </div>
    <div style="width: 100%;">
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>dossier scientifique</th>
            <th>etat scientifique</th>
            <th>Details</th>
        </tr> 
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id!=1 and etatscientifique='valide'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $nom = $row['nom'];
                      $prenom = $row['prenom'];
                      $dossierscientifique = $row['dossierscientifique'];
                      $etatscientifique = $row['etatscientifique'];
                      echo '
                           <tr>
                             <td>'.$nom.'</td>
                             <td>'.$prenom.'</td>
                             <td>'.$dossierscientifique.'</td>
                             <td>'.$etatscientifique.'</td>
                             <td>
                             <button class="btn btn-primary"><a class="text-light" href="details.php?detailsid='.$id.'">details</a></button> 
                             </td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
           
        </tbody>
    </table>
   
   </div>



   <div style="width: 80%;">
        <h3>Dossier Pedagogique :</h3>
    </div>
    <div style="width: 100%;">
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>dossier pedagogique</th>
            <th>etat pedagogique</th>
            <th>Details</th>
        </tr> 
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id!=1 and etatpedagogique='valide'";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $nom = $row['nom'];
                      $prenom = $row['prenom'];
                      $dossierpedagogique = $row['dossierpedagogique'];
                      $etatpedagogique = $row['etatpedagogique'];
                      echo '
                           <tr>
                             <td>'.$nom.'</td>
                             <td>'.$prenom.'</td>
                             <td>'.$dossierpedagogique.'</td>
                             <td>'.$etatpedagogique.'</td>
                             <td>
                             <button class="btn btn-primary"><a class="text-light" href="details.php?detailsid='.$id.'">details</a></button> 
                             </td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
           
        </tbody>
    </table>
   <button class="btn btn-warning" style="display:flex;"> <a href="a.php">Retour</a> </button>
   </div>

</body>
</html>
