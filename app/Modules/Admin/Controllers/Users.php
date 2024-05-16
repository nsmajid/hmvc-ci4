<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Controllers\Users as UserModel;

class Users extends BaseController
{
    public function __construct() {
        $this->user = new UserModel;
    }
    public function index(): string
    {
    //    return view("users");
       return view("\App\Modules\Admin\Views\users");

    }
}
