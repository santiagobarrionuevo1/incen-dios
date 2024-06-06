<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class user extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password don't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);
                // Redirecting to dashboard after login
             //   return redirect()->to(base_url('dashboard'));

            }
        }
        return view('index');
    }

    private function setUserSession($user)
    {
        $data = [
            'userID' => $user['userID'],
            'Nombre' => $user['Nombre'],
            'Telefono' => $user['Telefono'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        $UserModel=new UserModel();

        $Email = $this->request->getPost('Email');
        $Nombre = $this->request->getPost('Nombre');
        $Telefono = $this->request->getPost('Telefono');
        $password = $this->request->getPost('password');
        $data = [
            'Email'=> $Email,
            'Nombre'=> $Nombre,
            'Telefono'=> $Telefono,
            'password'=> $password

        ];
        $r = $UserModel->add($data);
        if($r)
        echo 'user registrado';
        

        return view('login');
    }

    public function profile()
    {

        $data = [];
        $model = new UserModel();

        $data['user'] = $model->where('UsuarioID', session()->get('UsuarioID'))->first();
        return view('profile', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }


}