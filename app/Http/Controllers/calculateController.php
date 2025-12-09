<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculateController extends Controller
{
    public function sum (float $a, float $b) {
        $sum = $a + $b;
        return 'The sum of' . $a . 'and' . $b .' = ' . $sum;
    }

    public function subtract (float $a, float $b) {
        $diff = $a - $b;
        return 'The Difference of' . $a . 'and' . $b .' = ' . $diff;

}
}
