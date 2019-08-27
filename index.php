<?php
$title = "Home";
require_once 'layout/header.php';
?>

<div class="home uk-background-cover" style="background: linear-gradient(to bottom, #dddddd69, rgba(100, 100, 100, 0.2)), url(img/bg.jpg);">
    <h1 class="cta-home uk-text-uppercase uk-text-bold uk-text-center uk-padding-large">Upload File</h1>
    <div class="buttons uk-flex uk-flex-center">
        <a class="uk-button uk-button-primary uk-button-large uk-margin-medium-right" href="see_file.php">See files</a>
        <a class="uk-button uk-button-primary uk-button-large" href="upload_file.php">Upload files</a>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>