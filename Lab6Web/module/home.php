<?php
require_once("class/Database.php");
require_once("class/Form.php");
$database = new Database();
$data = $database->gets("data_mahasiswa");
?>

<?php require('template/header.php'); ?>
<div class="main">
    <h2>CRUD</h2>
    <h2>Struktur Modular dan Class (OOP)</h2>
    <a class="button tambah" href="tambah">TAMBAH DATA</a>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>UBAH</th>
            <th>HAPUS</th>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $data[$i]["nim"]; ?></td>
                <td><?= $data[$i]['nama']; ?></td>
                <td><?= $data[$i]['kelas']; ?></td>
                <td><a class="btnUpdate" href="module/artikel/ubah.php?id=<?= $data[$i]["id"] ?>">UPDATE</a></td>
                <td><a class="btnDelete" href="module/artikel/hapus.php?id=<?= $data[$i]["id"] ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php require('template/footer.php'); ?>