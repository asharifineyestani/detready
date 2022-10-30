<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CurlController extends Controller
{
    //

    public function doLoopDownload()
    {
        $pattern2 = 'https://res.cloudinary.com/detready/video/upload/describe/LTS%d-question.mp3';
        $start2 = 1;
        $end2 = 100;
        $this->loopDownload($start2, $end2, $pattern2);
    }

    public function index()
    {
        $images = (array_unique($this->images));

        $pattern = 'https://res.cloudinary.com/detready/image/upload/photos/%s';

        foreach ($images as $image) {
            $file_url = $this->makeUrl($pattern, $image);
            try {
                $this->download($file_url);
                echo 'Downloaded: ' . $file_url;
                echo '<br>';
            } catch (\Exception $e) {
                echo 'Failed: ' . $file_url;
                echo '<br>';
            }

        }
    }

    public function loopDownload($start, $end, $pattern)
    {
        foreach (range($start, $end) as $number) {
            $file_url = $this->makeUrl($pattern, $number);

            try {
                $this->download($file_url);
                echo 'Downloaded: ' . $file_url;
                echo '<br>';
            } catch (\Exception $e) {
                echo 'Failed: ' . $file_url;
                echo '<br>';
            }
        }
    }


    function exists($url)
    {
        $client = new Client();

        try {
            $client->head($url);
            return true;
        } catch (ClientException $e) {
            return false;
        }
    }


    private function makeUrl($patternUrl, $number): string
    {
        return sprintf($patternUrl, $number);
    }

    private function getFileName($file_url): string
    {
        $path = parse_url($file_url, PHP_URL_PATH);
        return basename($path);
    }

    private function download($file_url)
    {

        $contents = file_get_contents($file_url);
        Storage::disk('public')->put($this->getFileName($file_url), $contents);
    }
}
