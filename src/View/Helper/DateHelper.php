<?php

// File: src/View/Helper/DateHelper.php
namespace App\View\Helper;

use Cake\View\Helper;

class DateHelper extends Helper
{
    public function format($date, $format = 'd-m-Y')
    {
        return date($format, strtotime($date));
    }
}
