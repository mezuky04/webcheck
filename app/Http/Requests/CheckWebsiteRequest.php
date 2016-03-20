<?php

namespace App\Http\Requests;

/**
 * Authorize and validate CheckWebsiteRequest.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CheckWebsiteRequest extends Request {

    /**
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * @return array
     */
    public function rules() {
        return [
            'website' => ['required', 'valid_url_scheme', 'valid_domain']
        ];
    }

}