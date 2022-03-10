<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<?php
    if (session()->getFlashdata('success'))
    {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">Close</button>
</div>
<?php
    }
?>
<button class="btn btn-primary" data-toggle="modal" data-target="#addUser">Tambah User</button>
<table class="table table-stripped table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Jenis Kelamin</th>
        <th>Jenis</th>
        <th>Option</th>
    </thead>
        <?php
            $no =1;
            foreach ($data as $row) :
        ?>
        <tbody>
        <tr>
            <th><?=$no?></th>
            <th><?=$row['nama']?></th>
            <th><?=$row['username']?></th>
            <th><?=$row['jenis_kelamin']?></th>
            <th><?=$row['jenis']?></th>
                <td>
                    <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editUser-<?=$row['id']?>">Edit</button>
                    <a href="<?= base_url('user/delete/'.$row['id'])?>" onclick="return confirm ('yakin mau hapus?')" class="btn btn-danger btn-sm btn-delete">Delete</a>
                </td>
        </tr>
        
        </tbody>
        <div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelledby="example" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="example">tambah user</h5>
                   <button class="close" data-dismiss="modal" aria-label="close"></button>
               </div>
               <form action="<?= base_url('user/edit/'.$row['id'])?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control"  id="nama" placeholder="inputkan nama" value="<?=$row['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="inputkan password" value="<?=$row['password']?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="inputkan username" value="<?=$row['username']?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?=$row['jenis_kelamin']?>">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis User</label>
                            <select name="jenis" id="jenis" class="form-control" value="<?=$row['jenis']?>">
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
           </div>
       </div> 
    </div>
        <?php
            $no++;
            endforeach;
        ?>
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="example" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example">Tambah User</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="<?= base_url('user')?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="inputkan nama">
                       
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="inputkan username">
                            </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="inputkan password">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis User</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</table>
<?=$this->endSection()?>
