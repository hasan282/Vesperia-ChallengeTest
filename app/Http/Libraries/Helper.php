<?php

namespace App\Http\Libraries;

class Helper
{
    /**
     * Replace all space and new line to specified character
     * @return string Result
     */
    public static function GapReplace(
        ?string $text,
        string $replace = ' '
    ): string {
        $result = preg_replace('/\s+/', $replace, '' . $text);
        return trim($result);
    }

    public static function submission()
    {
        $path = resource_path('json/submission.json');

        if (!file_exists($path)) return null;

        return json_decode(
            file_get_contents($path),
            true
        );
    }
};
