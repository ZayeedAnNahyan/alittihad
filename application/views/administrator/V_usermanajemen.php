<div class="card">
    <div class="card-header" style="background-color: #0091ea">
        <h3 class="text-uppercase text-center font-weight-bold" style="color: #ffffff;">DATABASE USER<br> SMP IT AL-ITTIHAD KOTA BEKASI</h3>
    </div>

    <!-- Button trigger modal -->
    <div class="text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Tambah User
        </button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center font-weight-bold" style="color: #ffffff; background-color: #0091ea">
                        NO
                    </th>
                    <th class="text-center font-weight-bold" style="color: #ffffff; background-color: #0091ea">
                        NAMA
                    </th>
                    <th class="text-center font-weight-bold" style="color: #ffffff; background-color: #0091ea">
                        NISN
                    </th>
                    <th class="text-center font-weight-bold" style="color: #ffffff; background-color: #0091ea">
                        AKUN
                    </th>
                    <th class="text-center font-weight-bold" style="color: #ffffff; background-color: #0091ea">
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($value as $value) { ?>
                    <tr>
                        <td class="text-center">
                            <?= $value->id; ?>
                        </td>
                        <td>
                            <?= $value->nama; ?>
                        </td>
                        <td class="text-center">
                            <?= $value->password; ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($value->level == 1) {
                                echo 'Admin';
                            } elseif ($value->level == 2) {
                                echo 'Siswa';
                            } else {
                                echo 'PPDB';
                            }
                            ?>
                        </td>
                        <td class="text-center">                            
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" data-toggle="modal" data-target="#edit_user" class="btn btn-sm btn-primary">Edit</button>
                                <a href="<?= base_url('administrator/user_manajemen/hapus/' . $value->id . ''); ?>" class="btn btn-sm btn-danger">hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url() ?>administrator/user_manajemen/tambah" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center font-weight-bold" id="exampleModalLongTitle">BUAT AKUN</h3>
                </div>
                <div class="modal-body">
                    <input type="text" name="nama" class="form-control" placeholder="Username (Nama Lengkap)" autocomplete="off"> <br>
                    <input type="password" name="nisn" class="form-control" placeholder="Password (NISN)" id="Password"> <br>
                    <select name="level" class="form-control">
                        <option value="0">Pilih Jenis User</option>
                        <option value="1">Admin</option>
                        <option value="2">Siswa</option>
                        <option value="3">PPDB</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url() ?>administrator/user_manajemen/tambah" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center font-weight-bold" id="exampleModalLongTitle">EDIT AKUN</h3>
                </div>
                <div class="modal-body">
                    <p> USERNAME </p>
                    <input type="text" name="nama" class="form-control" placeholder="Username (Nama Lengkap)" autocomplete="off"> <br>
                    <p> PASSWORD </p>
                    <input type="password" name="nisn" class="form-control" placeholder="Password (NISN)" id="Password"> <br>
                    <p> JENIS USER </p>
                    <select name="level" class="form-control">
                        <option value="0">Pilih Jenis User</option>
                        <option value="1">Admin</option>
                        <option value="2">Siswa</option>
                        <option value="3">PPDB</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    window.onload = function () {
        $('table').dataTable({
            dom: 'Blftipr',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ]
        });
    };
</script>