<?php

namespace App\Controllers;

class User extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        $model = new \App\Models\UserModel();

        $data = [
            'users' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        return view('user/index', [
            'data' => $data,
        ]);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $modeluser = new \App\Models\UserModel();

        $User = $modeluser->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'userupdate');
            $errors = $this->validation->getErrors();


            if (!$errors) {
                $b = new \App\Entities\User();
                $b->id = $id;
                $b->fill($data);


                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $modeluser->save($b);


                // print_r($id);
                // print_r($barang);
                // exit();
            }
        }

        return view('user/update', [
            'user' => $User,
        ]);
    }
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modeluser = new \App\Models\UserModel();
        $delete = $modeluser->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}
