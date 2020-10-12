<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\HomeRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $homeRepository;
    protected $user;

    public function __construct(HomeRepositoryEloquent $homeRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->middleware(function ($request, $next) {

            $this->user = session()->get('user');

            return $next($request);
        });
    }

    public function dashboard(Request $request)
    {
        try {
            if ($this->user == null) {
                // get user abbilities
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}
