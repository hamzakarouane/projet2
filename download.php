<?php
if(!empty($_GET['dossierpedagogique'])){
    $fileName3  = basename($_GET['dossierpedagogique']);
    $filePath3  = "files/".$fileName3;
    
    if(!empty($fileName3) && file_exists($filePath3)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName3");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath3);
        exit;
    }
    else{
        echo "file not exit";
    }
}

if(!empty($_GET['dossierscientifique'])){
    $fileName2  = basename($_GET['dossierscientifique']);
    $filePath2  = "files/".$fileName2;
    
    if(!empty($fileName2) && file_exists($filePath2)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName2");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath2);
        exit;
    }
    else{
        echo "file not exit";
    }
}

if(!empty($_GET['dossieracademique'])){
    $fileName1  = basename($_GET['dossieracademique']);
    $filePath1  = "files/".$fileName1;
    
    if(!empty($fileName1) && file_exists($filePath1)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName1");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath1);
        exit;
    }
    else{
        echo "file not exit";
    }
}

?>
