<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Étudiant</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['user']; ?> (Étudiant)</h1>
    <a href="../includes/logout.php">Déconnexion</a>
</body>
</html>
