<?php
/**
 * Created by PhpStorm.
 * User: pengfeipeng
 * Date: 6/29/18
 * Time: 9:24 AM
 */

namespace App\Http\Controllers;


class UsersController
{

    public function create()
    {
        return view('layouts/create');
    }
}