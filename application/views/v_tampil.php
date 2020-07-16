<!DOCTYPE html>
<html>

<head>
    <title>Membuat Aplikasi CI-CRUD </title>
</head>

<body>
    <center>
        <h1>Membuat Aplikasi CI-CRUD </h1>
    </center>
    <center><?php echo anchor('index.php/crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>

            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php

        foreach ($user as $u) {
        ?>
            <tr>

                <td><?php echo $u->id ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->email ?></td>
                <td>
                    <?php echo anchor('index.php/crud/edit/' . $u->id, 'Edit'); ?>
                    <a onclick="return konfirmasi()" href="<?php echo base_url('index.php/crud/hapus/' . $u->id); ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <script type="text/javascript" Language="Javascript">
        function konfirmasi(id) {
            tanya = confirm("Apakah Anda Yakin Akan Menghapus ?");
            if (tanya == true) return true;
            else return false;
        }
    </script>
</body>

</html>