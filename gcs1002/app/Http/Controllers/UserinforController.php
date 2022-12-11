<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserinforController extends Controller
{

    // public function index() {
    //     $data = Admin::select('admins.*', 'roles.name AS role_name')
    //         ->join('roles', 'admins.role', 'roles.id')
    //         ->get();
    //     return view("Admin.AdminPage", compact('data'));
    // }


    // public function delete($id) {
    //     Admin::find($id)->delete();
    //     return view("admin/admin");
    // }

    public function index(){

        $data = Admin::select('admins.*', 'roles.name AS role_name')
            ->join('roles', 'admins.role', 'roles.id')
            ->get();
        return view("Admin.AdminPage", compact('data'));
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect("admin/admin");
    }

}
