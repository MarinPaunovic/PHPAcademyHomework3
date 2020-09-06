<form action="Zadatak4.php" method="POST" enctype="multipart/form-data">
    <input type="file"  name="datoteka">
    <input type="submit" value="Send File" name="submit">

</form>

<?php

if (isset($_POST["submit"])){
    var_dump($_FILES);
    if ($_FILES["datoteka"]["size"] > 1000000) {
        echo "Datoteka je prevelika, odaberite manju. <br>";
        $uploadOk = 0;
    }else $uploadOk = 1;
    $filetype=$_FILES["datoteka"]["type"];
    if($filetype !== "jpg" && $filetype !== ".png" && $filetype !== ".jpeg" && $filetype !== "image/jpeg"){
        echo "datoteka nije valjanog tipa";
        $uploadOk =0;
    }else $uploadOk =1;
}
?>