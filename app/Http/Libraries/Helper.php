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
};
