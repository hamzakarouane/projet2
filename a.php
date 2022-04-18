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
<body style="background-color: #89d6cc;">
    <div style="width: 80%;">
        <h1>Bonjour Administrateur :</h1>
    </div>
    <div style="width: 100%;">
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>specialite</th>
            <th>dossier academique</th>
            <th>etat dossier academique</th>
            <th>dossier scientifique</th>
            <th>etat dossier scientifique</th>
            <th>dossier pedagogique</th>
            <th>etat dossier pedagogique</th>
            <th>EDIT</th>
        </tr> 
        </thead>
        <tbody>
           <?php
                 $id = $_SESSION['id']; 
                 //echo "$id";
              include 'config.php';

              $sql = "select * from users where id!=1";
              $result = mysqli_query($conn,$sql);

              if($result){
                  while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $nom = $row['nom'];
                      $prenom = $row['prenom'];
                      $specialite = $row['specialite'];
                      $dossieracademique = $row['dossieracademique'];
                      $etatacademique = $row['etatacademique'];
                      $dossierscientifique = $row['dossierscientifique'];
                      $etatscientifique = $row['etatscientifique'];
                      $dossierpedagogique = $row['dossierpedagogique'];
                      $etatpedagogique = $row['etatpedagogique'];
                      echo '
                           <tr>
                             <td>'.$nom.'</td>
                             <td>'.$prenom.'</td>
                             <td>'.$specialite.'</td>
                             <td>'.$dossieracademique.'</td>
                             <td>'.$etatacademique.'</td>
                             <td>'.$dossierscientifique.'</td>
                             <td>'.$etatscientifique.'</td>
                             <td>'.$dossierpedagogique.'</td>
                             <td>'.$etatpedagogique.'</td>
                             <td>
                             <button class="btn btn-primary"><a class="text-light" href="welcomea.php?editid='.$id.'">update</a></button> 
                             </td>
                             </tr>       
                      ';
                  }   
              }        
           ?>
           
        </tbody>
    </table>
            </br>
            </br>
    <div>
    <button class="btn btn-dark" style="margin-left: 150px;"> <a style="color:white;" href="enattente.php">attente</a> </button>
   <button class="btn btn-primary" style="margin-left:150px;"> <a style="color:white;" href="encours.php">en cours</a> </button>
   <button class="btn btn-success" style="margin-left: 150px;"> <a style="color:white;" href="valide.php">valide</a> </button>
   <button class="btn btn-danger" style="margin-left:150px;"> <a style="color:white;" href="refuse.php">refuse</a> </button>
   <button class="btn btn-warning" style="margin-left: 150px;"> <a href="logout.php">Logout</a> </button>
   </div>
   </div>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>

