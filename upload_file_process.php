<?php 
$title= "upload file";
$filename ='';
$tmp_name ='';
$upload_folder='';
 if (empty($_FILES)){
     exit ("Merci de remplir le formulaire de contact") ;
    header('location: index.php');
   die();
}
//  var_dump($_FILES);

 $upload_folder = $_SERVER["DOCUMENT_ROOT"] . "/upload_file/uploads/";
//if (array_key_exists('infofile', $_FILES)){
//    $tmp_name=$_FILES['infofile']['tmp_name'];
//    $filename=$_FILES['infofile']['name'];
//    if (is_uploaded_file($tmp_name) && move_uploaded_file($tmp_name, $upload_folder . $filename)){
//        echo "Fichier(s) enregistré(s).<br>";
//    }
//}

// on va boucler sur les codes d' erreur de chaque fichier uploadé
// le code erreur 0 (correspondant à la constante upload_err_ok) signifie que tout s'est bien passé et qu'il
//n'y a pas d'erreur
// on sait que s'il ya plusieurs fichiers uploadés, on va concerver une seule clé "info", et une clé par propriété ("name", "tmp_name", "error" ...)
// chaque clé correspondant à une propriété ("error") par exemple sera un tableau unidimensionnel, avec pour chaque fichier, la valeur correspondante à cette 
// propriété
// dans notre boucle foreach , on va boucler sur le tableau $_FILES["info"]["error"]
/*
$_FILES ["infos"]["error"] ==> [0]==>0
                               [1]==>0
                               [2]==>0
il contient chaque code d'erreur de chaque fichier uploadé (0 signifie ok)
donc si on boucle sur ce tableau en utilisant la syntaxe $key ==> $error
on peut vérifier si tout s'est bien passé pour chaque fichier
si c'est le cas, càd le code d'erreur vaut 0 alors on peut utiliser notre variable $key pour accéderaux autres propriété de notre fichier
*/
foreach ($_FILES["infos"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["infos"]["tmp_name"][$key];
        // basename() peut empêcher les attaques "filesystem traversal";
        // une autre validation/néttoyage du nom de fichier peux être appropriée
        $name = basename($_FILES["infos"]["name"][$key]);
        move_uploaded_file($tmp_name, $upload_folder . $name);
    }
}
    echo "Merci de votre demande.";
?>



<?php include_once 'layout/footer.php' ?>