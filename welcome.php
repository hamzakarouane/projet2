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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
        input[type="file"]{
            display:none;
            border-radius:5px;
        }
        label ,input[type="text"]{
            color:white;
            height:40px;
            width :250px;
            background-color: #f5af09;
            margin:auto;
            font-size: 20px;
            display:flex;
            justify-content: center;
            align-items:center;
            font-family: "Montserrat",sans-serif;
            border-radius:5px;

        }
    </style>
    <title>Welcome</title>
    
</head>
<body >
    <!-- <div>
        style="background-color:#b39700;"
        <img src="a.jpg" alt="ensaj" style="width:1365px;height:100px;"/>
    <div> -->
    <?php
   include 'config.php';
   echo "ID:" . $_SESSION['id'] . "";
   $id = $_SESSION['id'];
   $sql = "select * from users where id='$id'";
   $result = mysqli_query($conn,$sql);

   if($result){
       while($row = mysqli_fetch_assoc($result)){
           $id = $row['id'];
           $username = $row['username'];
           $email = $row['email'];
           $nom = $row['nom'];
           $prenom = $row['prenom'];
           $specialite = $row['specialite'];
           $dossieracademique = $row['dossieracademique'];
           $etatacademique = $row['etatacademique'];
           $dossierscientifique = $row['dossierscientifique'];
           $etatscientifique = $row['etatscientifique'];
           $dossierpedagogique = $row['dossierpedagogique'];
           $etatpedagogique = $row['etatpedagogique'];
       }   
   }        

?>  
    
    <form name="fo" method="POST" action="" enctype="multipart/form-data">
        <fieldset>
            <legend align="center"> <strong>Saisissez vos informations personnelles et déposez vos dossiers  :</strong></legend>
        <!--  style="background-color:#33475b" -->
            <table border="1" align="center"  style="background-color:#002a3f; border-radius:20px;" width="1000px" height="400px" >
            
            <tr>
            <td style="color:#FFD700;">--> NOM:</td>
            <td>
                <input type="text" name="nom" placeholder="veuillez entrer votre nom!" value="<?php include 'config.php';
                 $id = $_SESSION['id'];
                 $sql = "select * from users where id='$id'";
                 $result = mysqli_query($conn,$sql);
                 if($result){
                    while($row = mysqli_fetch_assoc($result)){
                     $nom = $row['nom'];}}
                     echo "$nom";  
                     ?> "/>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#FFD700;">--> PRENOM:</td>
            <td>
                <input type="text" name="prenom" placeholder="veuillez entrer votre prenom!" value="<?php include 'config.php';
                 $id = $_SESSION['id'];
                 $sql = "select * from users where id='$id'";
                 $result = mysqli_query($conn,$sql);
                 if($result){
                    while($row = mysqli_fetch_assoc($result)){
                     $prenom = $row['prenom'];}}
                     echo "$prenom";  
                     ?> "/>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#FFD700;">--> SPECIALITE:</td>
            <td>
                <input type="text" name="specialite" placeholder="veuillez entrer votre specialite!" value="<?php include 'config.php';
                 $id = $_SESSION['id'];
                 $sql = "select * from users where id='$id'";
                 $result = mysqli_query($conn,$sql);
                 if($result){
                    while($row = mysqli_fetch_assoc($result)){
                     $specialite = $row['specialite'];}}
                     echo "$specialite";  
                     ?> "/>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
     
        <tr>
            <td style="color:white;">--> Dossier Academique:</td>
            <td>
                <input type="file" id="file1" name="dossieracademique"/>
                <label for="file1"><span class="material-icons">file_upload</span>&nbsp; add file </label>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
  
        <tr>
            <td style="color:white;">--> Dossier Scientifique:</td>
            <td>
                <input type="file" id="file2" name="dossierscientifique"/>
                <label for="file2"><span class="material-icons">file_upload</span>&nbsp; add file </label>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
     

        <tr>
            <td style="color:white;">--> Dossier Pedagogique:</td>
            <td>
                <input type="file" id="file3" name="dossierpedagogique" value="hahah"/>
                <label for="file3"><span class="material-icons">file_upload</span> &nbsp; add file </label>
            </td>
        </tr>
      
        <tr>
        </tr>
        <tr>
        </tr>
        
        <tr>
            <td></td>
            <td style="border-bottom:solid #002a3f 60px;">
                <input type="submit" class="btn btn-primary" name="submit"/>
            </td>
        </tr>
       

    
        <tr>
        <td></td>
        <td>
        <button class="btn btn-success" style="margin-right: 60px;">  <a style="color:white;" href="displayprof.php">Page Principale</a> </button>
        <button class="btn btn-danger">  <a style="color:white;" href="logout.php">Logout</a> </button>
        </td>
        </tr>
      

      <tr>
    <?php
              include 'config.php';
              $id = $_SESSION['id'];
              $query7 = "SELECT dossierpedagogique FROM users WHERE id='$id'";
              $run7 = mysqli_query($conn,$query7);
              
              while($rows = mysqli_fetch_assoc($run7)){
                   ?>
               <a href="download.php?file=<?php echo $rows['dossierpedagogique'] ?>">Download pedagogique</a><br>
               <?php
               }
               ?>
           </td>
    </tr>
    <tr>
    <?php
              include 'config.php';
              $id = $_SESSION['id'];
              $query8 = "SELECT dossierscientifique FROM users WHERE id='$id' ";
              $run8 = mysqli_query($conn,$query8);
              
              while($rows = mysqli_fetch_assoc($run8)){
                   ?>
               <a href="download.php?file=<?php echo $rows['dossierscientifique'] ?>">Download scientifique</a><br>
               <?php
               }
               ?>
           </td>
    </tr>

    <tr>
    <?php
              include 'config.php';
              $id = $_SESSION['id'];
              $query9 = "SELECT dossieracademique FROM users WHERE id='$id' ";
              $run9 = mysqli_query($conn,$query9);
              
              while($rows = mysqli_fetch_assoc($run9)){
                   ?>
               <a href="download.php?file=<?php echo $rows['dossieracademique'] ?>">Download Academique</a><br>
               <?php
               }
               ?>
           </td>
    </tr>
       
</table>
</fieldset>
    </form>


    <?php
   include 'config.php';
   //echo "<h1>Welcome " . $_SESSION['id'] . "</h1>";
    $id = $_SESSION['id']; 
    //echo "$id";
    if (isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $specialite = $_POST['specialite'];

    $sql0 = "UPDATE users SET nom='$nom',prenom='$prenom',specialite='$specialite' WHERE id='$id' ";
    
    $result0 = mysqli_query($conn,$sql0);
    if($result0){
        echo ".";
        //echo "data inserted successfully";
        //header('location:displayprof.php');
    }
    else {
        die(mysqli_error($conn));
    }
    // etat du dossier
    $sql = "UPDATE users SET etatacademique='en attente',etatscientifique='en attente',etatpedagogique='en attente' WHERE (id='$id') AND (etatacademique IS NULL) ";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        echo ".";
        //echo "data inserted successfully";
        //header('location:displayprof.php');
    }
    else {
        die(mysqli_error($conn));
    }
}
if (isset($_POST['submit'])){
    $fileName1 = $_FILES["dossieracademique"]["name"]; 
    $fileTmpName1 = $_FILES["dossieracademique"]["tmp_name"];  
    $path1 = "files/".$_FILES["dossieracademique"]["name"];
    $query1 = "UPDATE users SET dossieracademique='$fileName1' WHERE id='$id'";
    $result1 = mysqli_query($conn,$query1);
    if ($result1){
        if(move_uploaded_file($_FILES["dossieracademique"]["tmp_name"], $path1)){
            echo ".";
        }
            else{
                echo "erreur de chargement";
            }
        };
    }
    else {
        die(mysqli_error($conn));
    }

    if (isset($_POST['submit'])){
        $fileName2 = $_FILES["dossierscientifique"]["name"]; 
        $fileTmpName2 = $_FILES["dossierscientifique"]["tmp_name"];  
        $path2 = "files/".$_FILES["dossierscientifique"]["name"];
        $query2 = "UPDATE users SET dossierscientifique='$fileName2' WHERE id='$id'";
        $result2 = mysqli_query($conn,$query2);
        if ($result2){
            if(move_uploaded_file($_FILES["dossierscientifique"]["tmp_name"], $path2)){
                echo ".";}
                else{
                    echo "erreur de chargement";
                }
            };
        }  
        else {
            die(mysqli_error($conn));
        }
    
        if (isset($_POST['submit'])){
            $fileName3 = $_FILES["dossierpedagogique"]["name"]; 
            $fileTmpName3 = $_FILES["dossierpedagogique"]["tmp_name"];  
            $path3 = "files/".$_FILES["dossierpedagogique"]["name"];
            $query3 = "UPDATE users SET dossierpedagogique='$fileName3' WHERE id='$id'";
            $result3 = mysqli_query($conn,$query3);
            if ($result3){
                if(move_uploaded_file($_FILES["dossierpedagogique"]["tmp_name"], $path3)){
                    echo ".";}
                    else{
                        echo "erreur de chargement";
                    }
                };
            }  
            else {
                die(mysqli_error($conn));
            }
        
   ?> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
</body>
</html>

