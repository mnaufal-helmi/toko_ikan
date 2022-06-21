<?php 
namespace App\Controllers;

class User extends BaseController{

    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        $model = new \App\Models\UserModel();

        return view ('user/index',[
            'data' => $model->findAll(),
        ]);
    }
}
