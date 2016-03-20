<?php

namespace App\Http\Controllers;
use App\Http\Requests\CheckWebsiteRequest;
use App\Website;
use App\WebsiteCheck;

/**
 * Handle checking of a website.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CheckWebsiteController extends BaseController {

    /**
     * Render check website index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('checker.index');
    }

    public function check(CheckWebsiteRequest $request) {

        // todo curl request to see website status

        $input = $request->get('website');
        $parsedUrl = parse_url($input);

        // Get domain extension
        if (isset($parsedUrl['host'])) {
            $host = $parsedUrl['host'];
        } else {
            $host = $parsedUrl['path'];
        }
        $parts = explode('.', $host);
        $suffix = $parts[count($parts) - 1];

        // Get the domain
        $name = '';
        if (isset($parsedUrl['host'])) {
            $name = $parsedUrl['host'];
        } else {
            $name = $parsedUrl['path'];
        }

        if (Website::where('name', $name)->count()) {
            Website::where('name', $name)->increment('checks');
            $website = Website::where('name', $name)->first();
        } else {
            $website = new Website();
            $website->name = $name;
            $website->suffix = $suffix;
            $website->checks = 1;
            $website->save();
        }

        // Insert in checks table also
        $websiteCheck = new WebsiteCheck();
        $websiteCheck->website_id = $website->id;
        $websiteCheck->request_ip = $request->ip();
        $websiteCheck->save();

        return [
            'website' => [
                'name' => $website->name
            ],
            'online' => $this->checkStatus($request->get('website'))
        ];
    }

    /**
     * Check if given $url is online.
     *
     * @param string $url
     * @return bool
     */
    private function checkStatus($url) {

        // Set agent
        $agent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; pt-pt) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27";

        $ch = curl_init();

        // Sets the URL to fetch
        curl_setopt($ch, CURLOPT_URL, $url);

        // Sets the content of the User-Agent header
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);

        // Make sure you only check the header
        curl_setopt($ch, CURLOPT_NOBODY, true);

        // Follow "Location: " redirects
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        // Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Disable output verbose information
        curl_setopt($ch, CURLOPT_VERBOSE, false);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Max number of seconds to allow cURL function to execute
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        // Execute
        curl_exec($ch);

        // Get HTTP response code
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300) {
            return true;
        }

        return false;
    }

}