<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameController extends Controller
{
    function gamePlay() {
        $index =rand(0, 2);
        if ($index == 0) {
            $type = "Rock";
        } else if ($index == 1) {
            $type = "Paper";
        } else {
            $type = "Scissor";
        }
        // return response()->json(["quote"=>$quotes[$index]]);
        return response()->json([ "computerChoice" => $type ]);
    }
}
