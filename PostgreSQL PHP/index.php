<?php
// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = '123';

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

// Set encoding (opsional tapi dianjurkan)
pg_set_client_encoding($conn, 'UTF8');

// Ambil data dari tabel mahasiswa
// Pakai alias agar array assoc tetap menggunakan key "Nama", "Nim", dst.
$sql = "
    SELECT
        \"Nim\"     AS \"Nim\",
        \"Nama\"    AS \"Nama\",
        \"Email\"   AS \"Email\",
        \"Jurusan\" AS \"Jurusan\"
    FROM \"TB_Mahasiswa\"
    ORDER BY \"Nim\"
";

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!-- HTML Code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        a {
            text-decoration: none;
            margin: 0 5px;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table>
    <tr>
        <th>No.</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php 
    $i = 1;
    while ($row = pg_fetch_assoc($result)): ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= htmlspecialchars($row["Nim"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Email"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td>
            <a href="edit.php?nim=<?= urlencode($row['Nim']); ?>">Edit</a> | 
            <a href="hapus.php?nim=<?= urlencode($row['Nim']); ?>" 
               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
// Bebaskan hasil & tutup koneksi (opsional)
pg_free_result($result);
pg_close($conn);
?>

