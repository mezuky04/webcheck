<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;

/**
 * Handle cookies page.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CookiesController extends Controller {

    /**
     * Render cookies page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('legal.cookies');
    }

}