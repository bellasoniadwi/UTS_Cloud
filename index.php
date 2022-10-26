<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
</head>

<body>

    <h2>DATA BARANG</h2>
    <br />
    <a href="add.php">Tambah Data</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Option</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($connect, "select * from student");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_barang']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a href="edit.php">EDIT</a>
                    <a href="delete.php">DELETE</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>