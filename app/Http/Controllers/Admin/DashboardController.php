<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController - Organizar Views do painel administrativo.
 *
 * @package App\Http\Controllers\Admin
 */
class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.admin.index');
    }

}
