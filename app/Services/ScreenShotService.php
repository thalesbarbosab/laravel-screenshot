<?php

namespace App\Services;

class ScreenShotService
{
    /**
     * This service generates the screenshot base64 using google pagespeed api
    */
    public function generate(string $url) : ?string
    {
        // Hit the Google PageSpeed Insights API.
        $response = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=".urlencode($url));

        // Convert the JSON response into an array.
        $google_page_speed_object = json_decode($response, true);

        // Grab the Screenshot
        $base64_screenshot = $google_page_speed_object['lighthouseResult']['audits']['full-page-screenshot']['details']['screenshot']['data'];

        return $base64_screenshot;
    }
}

