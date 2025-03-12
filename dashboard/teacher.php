<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'teacher') {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Enseignant</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['user']; ?> (Enseignant)</h1>
    <a href="../includes/logout.php">Déconnexion</a>
</body>
</html>
