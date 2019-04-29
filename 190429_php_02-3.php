<?php
    main();

    function main () {
        $hour = date("h");
        $minites = date("i");

        switch ($hour) {
            case '12':
                echo_time ($hour, $minites);
                break;
            case '18':
                echo_time ($hour, $minites);   
                break;        
            default:
                echo "ただいま{$hour}時{$minites}分です。";
                break;
        }
    }
    function echo_time ($hour, $minites) {
        echo "ただいま{$hour}時{$minites}分です。";
        if($minites <= 45 && $minites >= 30){
            echo "お腹空いた!";
        }
        echo "\n";
        return 0;
    }
?>