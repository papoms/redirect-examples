<?php
    // use ?delay={seconds} to add custom delay
    // defaults to 2 seconds 
    $d = filter_input(INPUT_GET, 'delay', FILTER_SANITIZE_NUMBER_INT);
    $delay = $d ? $d : 2;

    header("Refresh:". $delay . "; url=http://httpbin.org/anything");

