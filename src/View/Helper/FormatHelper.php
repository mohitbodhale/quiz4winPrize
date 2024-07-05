<?php
// File: src/View/Helper/TimeHelper.php
namespace App\View\Helper;

use Cake\View\Helper;

class FormatHelper extends Helper
{
    public function secondsToHMS($seconds)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }
}
