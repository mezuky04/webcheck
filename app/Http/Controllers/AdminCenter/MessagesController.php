<?php

namespace App\Http\Controllers\AdminCenter;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Handle admin messages page.
 *
 * @author Alexandru Bguarin <alexandru.bugarin@gmail.com>
 */
class MessagesController extends Controller {

    /**
     * MessagesController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        if (Auth::check()) {
            return 'logged';
        }
        return view('pages.admin-center.messages.index');
    }

}