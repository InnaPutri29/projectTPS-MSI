<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>produk</td>
                <td><input type="text" name="produk"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>