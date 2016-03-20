<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;

/**
 * Handle terms of service page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class TermsOfServiceController extends Controller {
    
    public function index() {
        return view('legal.terms');
    }
    
}