<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>produk</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($products as $product) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $product->produk ?></td>
                <td><?php echo $product->harga ?></td>
                <td><?php echo $product->jumlah ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $product->id, 'Edit'); ?>
                    <?php echo anchor('crud/hapus/' . $product->id, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>