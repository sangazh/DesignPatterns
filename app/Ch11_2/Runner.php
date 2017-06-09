<?php

namespace App\Ch11_2;

use App\Ch11_2\Marker\MarkLogicMarker;
use App\Ch11_2\Marker\MatchMarker;
use App\Ch11_2\Marker\RegexMarker;
use App\Ch11_2\Question\TextQuestion;

class Runner
{
    public static function init()
    {
        $markers = [
            new RegexMarker("/f.ve/"),
            new MatchMarker("five"),
            new MarkLogicMarker('$input equals "five"'),
        ];

        foreach ($markers as $marker) {
            print get_class($marker) . "\n";
            $question = new TextQuestion("how many beans make five", $marker);

            foreach (["five", "four"] as $response) {
                print "     response: $response: ";
                if ($question->mark($response)) {
                    print "Well done!\n";
                } else {
                    print "Never mind.\n";
                }
            }
        }
    }

}