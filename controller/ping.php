<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $content = file_get_contents(filename: 'php://input');

        if($content === 'PING'){
            $source = $_SERVER['HTTP_PING_FROM'];
            $dest = $_SERVER['HTTP_PING_TO'];
            $send_at = date(format: 'd/m/Y H:i:s');

            file_put_contents(filename: 'ping.log', data: 
            "$send_at - $cotent - De : $source - Vers $dest\n", flags: FILE_APPEND);
        }
    }