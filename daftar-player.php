<?php
// Menyertakan file CSS
echo '<link rel="stylesheet" type="text/css" href="css/nanda.css">';

// Koneksi ke database (ubah dengan kredensial yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucp";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data pemain dari database
$sql = "SELECT ID, ucp FROM playerucp";
$result = $conn->query($sql);

// Periksa apakah query berhasil
if ($result === false) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <title>Daftar Pemain | Projek Anda</title>
</head>
<body>
    <header>
        <h1>NandaSamp Roleplay</h1>
        <nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="buat-akun.php">Buat Akun</a></li>
                <li><a href="#">Discord</a></li>
                <li><a href="daftar-player.php">Daftar Player</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Daftar Pemain</h2>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ucp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row["ID"]); ?></td>
                            <td><?php echo htmlspecialchars($row["ucp"]); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Belum ada pemain yang terdaftar.</p>
        <?php endif; ?>

        <?php $conn->close(); ?>
    </div>

    <footer>
        <p>&copy; 2024 Projek Anda. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
