<?php

namespace App\Http\Controllers;
use App\Website;
use App\WebsiteCheck;
use Illuminate\Support\Facades\DB;

/**
 * Contains api methods.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ApiController extends Controller {

    public function mostCheckedWebsites() {
        return DB::table('websites')->select('name', 'checks')->orderBy('checks', 'desc')->take(10)->get();
    }
}