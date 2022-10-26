<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>

    <h2>TAMBAH DATA</h2>
    <br />
    <a href="index.php">BACK</a>
    <br />
    <br />
    <h3>TAMBAH DATA BARANG/h3>
    <form method="post" action="add_action.php">
        <table>
            <tr>
                <td>Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>