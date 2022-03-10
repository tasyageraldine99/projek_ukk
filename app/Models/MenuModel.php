<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class MenuModel extends Model{
        protected $table = 'tb_menu';
        // Uncommen below if you wand add primary key
        protected $primaryKey = 'id';
        protected $allowedFields =['nama','harga','jumlah','jenis','keterangan'];
    }
?>
