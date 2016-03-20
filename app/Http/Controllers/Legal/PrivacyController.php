<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;

/**
 * Handle privacy page.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class PrivacyController extends Controller {

    public function index() {
        return view('legal.privacy');
    }

}