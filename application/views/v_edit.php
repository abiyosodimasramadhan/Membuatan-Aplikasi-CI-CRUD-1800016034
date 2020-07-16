<!DOCTYPE html>
<html>

<head>
    <title>Membuat Aplikasi CI-CRUD</title>
</head>

<body>
    <center>
        <h1>Membuat Aplikasi CI-CRUD </h1>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($user as $u) { ?>
        <form action="<?php echo base_url() . 'index.php/crud/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <t>
                    <td>E-mail</td>
                    <td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
                </t>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>