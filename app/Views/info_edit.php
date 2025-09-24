<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($products as $product) { ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $product->id ?>">
                        <input type="text" name="produk" value="<?php echo $product->produk ?>">
                    </td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text" name="harga" value="<?php echo $product->harga ?>"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $product->jumlah ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>