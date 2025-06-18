<?php
$conn = new mysqli("localhost", "root", "", "nova-dev");

if ($conn->connect_error) {
    die("Erreur connexion : " . $conn->connect_error);
}

$lien = $_POST['lien'];
$titre = $_POST['titre'];
$description = $_POST['description'];

$sql = "INSERT INTO infos (lien, titre, description) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $lien, $titre, $description);

if ($stmt->execute()) {
    echo "Formulaire 1 enregistré.";
} else {
    echo "Erreur : " . $stmt->error;
}

$conn->close();
?>
