<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index() {

        $users = $this->userService->paginate();

        // $users = User::paginate(15);
        
        $config = $this->config();

        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users'
        ));
    }

    public function config() {
        return [
            'css' => [
                'backend-style/css/plugins/switchery/switchery.css',
            ],
            'js' => [
                'backend-style/js/plugins/switchery/switchery.js',
            ]
        ];
    }
}
