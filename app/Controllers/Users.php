<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    /**
     * User Accounts page.
     * Records are retrieved from the `users` table through UserModel
     * (Query Builder) instead of the static array used in TFA1.
     */
    public function index(): string
    {
        $userModel = new UserModel();

        $data['title'] = 'User Accounts';
        $data['users'] = $userModel->orderBy('id', 'ASC')->findAll();

        return view('users/index', $data);
    }
}
