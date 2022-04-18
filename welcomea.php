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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>Welcome</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:#8a679e;
            font-family:'Open Sans',sans-serif;
            color:#fff;
        }
        select{
            -webkit-apperance:none;
            -moz-appearance:none;
            -ms-appearance:none;
            appearance:none;
            outline:0;
            box-shadow:none;
            border:0!important;
            background:#5c6664;
            background-image:none;
        }
        select::-ms-expand {
            display: none;
        }
        .select{
            position:relative;
            display:flex;
            width: 20em;
            height: 3em;
            line-height: 3;
            background: #5c6664;
            overflow: hidden;
            border-radius: .25em;
        }
        select{
            flex:1;
            padding:0 .5em;
            color: #fff;
            cursor: pointer;
            font-size: 1em;
            font-family:'Open Sans',sans-serif;
        }
        .select::after {
            content: '\25BC';
            position: absolute;
            top: 0;
            right: 0;
            padding: 0 1em;
            background: #2b2e2e;
            cursor: pointer;
            pointer-events:none;
            transition: .25s all ease;
        }
        .select:hover::after {
              color: red;
        }
    </style>
</head>
<body>
    <div style="border-bottom:solid #8a679e 100px;">
    <form name="fo" method="POST" action="" enctype="multipart/form-data" >
        <fieldset>
            <legend>Etats des Dossiers :</legend>
        <table>
        <tr>
            <td>Etat Dossier Academique:</td>
            <td>
                <div class="select">
                <select name="etatacademique" required>
                    <option>en attente</option>
                    <option>en cours</option>
                    <option>valide</option>
                    <option>refuse</option>
                </select>
    </div>
            </td>
        </tr>

        <tr>
            <td>Etat Dossier Scientifique:</td>
            <td>
            <div class="select">
                <select name="etatscientifique" required>
                    <option>en attente</option>
                    <option>en cours</option>
                    <option>valide</option>
                    <option>refuse</option>
                </select>
                </div>
            </td>
        </tr>
       

        <tr>
            <td>Etat Dossier Pedagogique:</td>
            <td>
            <div class="select">
                <select name="etatpedagogique" required>
                    <option>en attente</option>
                    <option>en cours</option>
                    <option>valide</option>
                    <option>refuse</option>
                </select>
                </div>
            </td>
        </tr>
      

        
        <tr>
            <td></td>
            <td>
              <input class="btn btn-primary" type="submit" name="submit"/>
            </td>
        </tr>
</table>
</fieldset>
    </form>
    </div>

<div>
   <button class="btn btn-success" style="margin-right: 60px;"> <a class="text-light" href="a.php">Page Principale</a></button>
   <button class="btn btn-warning"> <a class="text-light" href="logout.php">Deconnexion</a> </button>
</div>


    <?php
    include 'config.php';
    //echo "<h1>Welcome " . $_SESSION['id'] . "</h1>";
    $id = $_GET['editid']; 
    // echo "$id";
    if (isset($_POST['submit'])){
    $etatacademique = $_POST['etatacademique'];
    $etatscientifique = $_POST['etatscientifique'];
    $etatpedagogique = $_POST['etatpedagogique'];

    $sql = "UPDATE users SET etatacademique='$etatacademique',etatscientifique=' $etatscientifique',etatpedagogique='$etatpedagogique' WHERE id='$id' ";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        echo ".";
        //echo "data inserted successfully";
        //header('location:diplay.php');
    }
    else {
        die(mysqli_error($conn));
    }
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>