<?php
// Menyertakan file CSS
echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
?>

<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun | Projek Anda</title>
</head>
<body>
    <header>
        <h1>NandaSamp Roleplay</h1>
        <nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="didalam/buat-akun.php">Buat Akun</a></li>
                <li><a href="#">Discord</a></li>
                <li><a href="daftar-player.php">Daftar Player</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Buat Akun</h2>
        <form action="proses-buat-akun.php" method="post">
            <label for="ucp">ucp:</label>
            <input type="text" id="ucp" name="ucp" required>
            <br><br>
            <label for="DiscordID">ID DISCORD:</label>
            <input type="tel" id="DiscordID" name="DiscordID" required>
            <br><br>
            <label for="verifycode">verifycode:</label>
            <input type="text" id="verifycode" name="verifycode" required>
            <br><br>
            <input type="submit" value="Buat Akun">
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Projek Anda. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
