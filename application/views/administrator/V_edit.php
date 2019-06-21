<!DOCTYPE html>
<html>
    <head>
        <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
    </head>
    <body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($user as $u) { ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
                </tr>
                <tr>
                    <td>User</td>
                    <td><input type="text" name="level" value="
                        <?php
                        if ($u->level == 1) {
                            echo 'Admin';
                        } elseif ($u->level == 2) {
                            echo 'Siswa';
                        } else {
                            echo 'PPDB';
                        }
                        ?>">
                    </td>
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