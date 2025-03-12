<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/script.js"></script>
</head>
<body>
    <form action="includes/auth.php" method="POST">
        <h2>Inscription</h2>
        <label>Nom</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Mot de passe</label>
        <input type="password" name="password" required>

        <div class="switcher">
            <input type="radio" name="role" value="teacher" id="teacher" checked>
            <label for="teacher">Enseignant</label>
            <input type="radio" name="role" value="student" id="student">
            <label for="student">Étudiant</label>
        </div>

        <button type="submit" name="signup">S'inscrire</button>
    </form>
</body>
</html>
