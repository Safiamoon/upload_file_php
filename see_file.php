<?php require_once 'layout/header.php';?>

<?php
$files = array_diff (
     scandir($_SERVER['DOCUMENT_ROOT'] . '/upload_file/uploads'),
     array ('..','..')

);
foreach ($files as $file){
  echo "<p>$file</p>";

}
?>

<?php require_once 'layout/footer.php';?>
    