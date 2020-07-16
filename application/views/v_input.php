<!DOCTYPE html>
<html>

<head>
    <title>Membuat Aplikasi CI-CRUD</title>
</head>

<body>
    <center>
        <h1>Membuat Aplikasi CI-CRUD </h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url() . 'index.php/crud/tambah_aksi'; ?>" method="post">
        <table style="margin:50px auto;">
            <tr>
                <td>ID User</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>