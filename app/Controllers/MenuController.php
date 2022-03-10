<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\models\MenuModel;
use CodeIgniter\HTTP\Request;

class MenuController extends Controller
{
    /**
     * Instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;
    function __construct()
    {
        $this->menu = new MenuModel();
    }
    public function tampil()
    {
        //$menus= new MenuModel();
        $data['data'] = $this->menu->findAll();
        return view('menu', $data);
    }
    public function create()
    {
        $data=array(
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'jenis' => $this->request->getPost('jenis'),
            'keterangan' => $this->request->getPost('keterangan'),
        );
        $this->menu->insert($data);
        return redirect('menu')->with('success', 'data berhasil disimpan');
    }
    public function edit($id)
    {
        $data=array(
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'jenis' => $this->request->getPost('jenis'),
            'keterangan' => $this->request->getPost('keterangan'),
        );
        $this->menu->update($id,$data);
        return redirect('menu')->with('success', 'data berhasil disimpan');
    }
    public function show($id)
    {
        # code...
    }
    public function delete($id)
    {
        $this->menu->delete($id);
        return redirect('menu')->with('success', 'data berhasil dihapus');
    }

}