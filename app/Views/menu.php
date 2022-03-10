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
<button class="btn btn-primary" data-toggle="modal" data-target="#addMenu">Tambah Menu</button>
<table class="table table-stripped table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Jenis</th>
        <th>Keterangan</th>
        <th>Option</th>
    </thead>
        <?php
            $no=1;
            foreach($data as $row):
        ?>
        <tbody>
        <tr>
            <th><?=$no?></th>
            <th><?=$row['nama']?></th>
            <th><?=$row['harga']?></th>
            <th><?=$row['jumlah']?></th>
            <th><?=$row['jenis']?></th>
            <th><?=$row['keterangan']?></th>
                <td>
                    <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</button>
                    <a href="<?= base_url('menu/delete/'.$row['id'])?>" onclick="return confirm ('yakin mau dihapus?')" class="btn btn-danger btn-sm btn-delete">Delete</a>
                </td>
        </tr>

        </tbody>
        <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="example" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example">Tambah Menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="<?= base_url('menu/edit/'.$row['id'])?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="inputkan nama" value="<?=$row['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="inputkan harga" value="<?=$row['harga']?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="inputkan jumlah" value="<?$row['jumlah']?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="form-contol" value="<?=$row['jenis']?>">
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="inputkan keterangan" value="<?=$row['keterangan']?>">
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
    <div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="example" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example">Tambah Menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="<?=base_url('menu')?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" plceholder="inputkan nama">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" plceholder="inputkan harga">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" plceholder="inputkan jumlah">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" id="form-control">
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="keterangan" name="keterangan" class="form-control" id="keterangan" plceholder="inputkan keterangan">
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