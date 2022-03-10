<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\models\UserModel;
use CodeIgniter\HTTP\Request;

class UserController extends Controller
{
    /**
     * 
     * Instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;
    function __construct()
    {
        $this->users = new UserModel();
    }
    public function tampil()
    {
        //$users = new userModel();
        $data['data'] = $this->users->findAll();
        return view('user',$data);
    }
    public function create()
    {
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('nama'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'jenis' => $this->request->getPost('jenis'),
        );
        $this->users->insert($data);
        return redirect('user')->with ('success', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'jenis' => $this->request->getPost('jenis'),
        );
        $this->users->update($id,$data);
        return redirect('user')->with ('success','data berhasil diedit');
    }
    public function show($id)
    {
        # code...
    }
    public function delete($id)
    {
        #code...
        $this->users->delete($id);
        return redirect('user')->with('success','Data Berhasil Dihapus');
    }
}
?>
