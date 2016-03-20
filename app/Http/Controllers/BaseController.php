<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

/**
 * Base controllers. Place here functionality needed in all controllers.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class BaseController extends Controller {

    public function __construct() {

        if (Auth::check()) {
            view()->share('loggedIn', Auth::check());
            view()->share('email', Auth::user()->email);
        }
    }

}