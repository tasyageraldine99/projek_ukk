<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class PesanModel extends Model{
        protected $table = 'tb_pesan';
        // Uncommen below if you wand add primary key
        protected $primaryKey = 'id';
        protected $allowedFields =['tanggal','nomer_nota','total_harga','no_meja','status'];
    }
?>
