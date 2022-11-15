<?php

namespace App\Controllers;

class AuthenticationController extends BaseController
{
    public function SignIn()
    {
        return View('Pages/SignIn');
    }

}
