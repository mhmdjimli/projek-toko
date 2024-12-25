<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MobilePhoneModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController 
{
    public function index() 
    {
        return view('admin/dashboard');
    }

    public function daftarHp() 
    {
        $hpModel = new MobilePhoneModel();
        $data['mobilephones'] = $hpModel->findAll();
        return view('admin/daftar-hp', $data);
    }

    public function daftarHpTambah() 
    {
        return view('admin/daftar-hp-tambah');
    }

    public function createHp() 
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if(!$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $hpModel = new MobilePhoneModel();

        if($hpModel->insert($data,false)) {
            return redirect()->to('admin/daftar-hp')->with('berhasil','data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-hp')->with('gagal','data gagal disimpan!');
        }
    }

    public function daftarHpEdit($id) 
    {
        $hpModel = new MobilePhoneModel();
        $data['hp'] = $hpModel->find($id);
        
        if ($data['hp']) {
            return view('admin/daftar-hp-edit', $data);
        }
        return redirect()->to('admin/daftar-hp')->with('gagal', 'Data HP tidak ditemukan.');
    }

    public function updateHp($id) 
    {
        $hpModel = new MobilePhoneModel();
        $data = $this->request->getPost();
        
        // Handle image upload if new image is provided
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        if ($hpModel->update($id, $data)) {
            return redirect()->to('admin/daftar-hp')->with('berhasil', 'Data HP berhasil diupdate!');
        }
        return redirect()->to('admin/daftar-hp')->with('gagal', 'Data HP gagal diupdate!');
    }

    public function daftarHpUpdate($id) 
    {
        $hpModel = new MobilePhoneModel();
        $data = $this->request->getPost();
        
        // Handle image upload if new image is provided
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }
        
        if ($hpModel->update($id, $data)) {
            return redirect()->to('admin/daftar-hp')->with('berhasil', 'Data HP berhasil diupdate!');
        }
        return redirect()->to('admin/daftar-hp')->with('gagal', 'Data HP gagal diupdate!');
    }

    public function hapusHp($id) 
    {
        $hpModel = new MobilePhoneModel();
        $hp = $hpModel->find($id);

        if ($hp) {
            $hpModel->delete($id);
            return redirect()->to('/admin/daftar-hp')->with('berhasil', 'Data HP berhasil dihapus.');
        }
        return redirect()->to('/admin/daftar-hp')->with('gagal', 'Data HP tidak ditemukan.');
    }

    public function transaksi() 
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus() 
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus() 
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan() 
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus() 
    {
        return view('admin/pelanggan-hapus');
    }
}