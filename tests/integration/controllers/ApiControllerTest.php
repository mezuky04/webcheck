<?php

use App\Website;
use Illuminate\Support\Facades\DB;

class ApiControllerTest extends TestCase {

    use \Illuminate\Foundation\Testing\DatabaseTransactions;

    public function testMostCheckedWebsites() {
        $website = factory(\App\Website::class, 2)->create([
            'checks' => 10
        ]);

        $websites = DB::table('websites')->select('complete', 'checks')->orderBy('checks', 'desc')->take(10)->get();

        $expected = [];

        foreach ($websites as $site) {
            $expected[] = ['complete' => $site->complete];
        }

        $this->get('/api/get-most-checked-websites')
            ->seeJson($expected);
    }

}