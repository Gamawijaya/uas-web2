<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Category_model;

class Category extends Controller
{
    public function index()
    {
        # code...
        $model = new Category_model();
        $data['laptop'] = $model->getCategory();
        echo view('category/index', $data);
    }

    public function create()
    {
        # code...
        return view('category/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_laptop'     => $this->request->getPost('id_laptop'),
            'nama_laptop'     => $this->request->getPost('nama_laptop'),
            'merk_laptop'     => $this->request->getPost('merk_laptop'),
            'spek'   => $this->request->getPost('spek')
        );

        if($validation->run($data, 'category') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('category/create'));
        } else {
            $model = new Category_model();
            $simpan = $model->insertCategory($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created Category successfully');
                return redirect()->to(base_url('category')); 
            }
        }
    }

    public function edit($id)
    {
        # code...
        $model = new Category_model();
        $data['category'] = $model->getCategory($id)->getRowArray();
        echo view('category/edit',$data);
    }

    public function update()
    {
        # code...
        $id = $this->request->getPost('id_laptop');
        $validation = \Config\Services::validation();

        $data = array(
            'id_laptop'     => $this->request->getPost('id_laptop'),
            'nama_laptop'     => $this->request->getPost('nama_laptop'),
            'merk_laptop'     => $this->request->getPost('merk_laptop'),
            'spek'   => $this->request->getPost('spek')
        );

        if($validation->run($data, 'category') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('category/edit/'.$id));
        } else {
            $model = new Category_model();
            $ubah = $model->updateCategory($data,$id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated Category');
                return redirect()->to(base_url('category')); 
            }
        }
    }

    //public function delete(){
        # code..
        //$model = new Category_model();
        //$hapus = $model->deleteCategory($id);
        //if($hapus){
          //  session()->setFlashdata('Warning', 'Deleted Category Succesfully');
           // return redirect()->to(base_url('category')); 
       // }
    //}


 }
 ?>
