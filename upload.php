<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadsDirectory = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $uploadsDirectory . $fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "Fichier téléchargé avec succès.";
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }
}
?>
