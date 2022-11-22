<?php

namespace App\Lib;

use Vimeo\Laravel\Facades\Vimeo;

class Video
{
    /**
     * @param string $name 動画のタイトル
     * @param string $file_path 動画ファイルのパス
     *
     * @return string Vimeoの動画ID
     */
    public static function uploadVideo(string $name, string $file_path): string
    {
        $uri = Vimeo::upload($file_path, ['name' => $name]);
        return mb_substr($uri, 8);
    }
}
