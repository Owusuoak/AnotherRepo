<?php

/**
 * @author johnmensah
 * @copyright 2012
 */
function redirect_to($url, $status = '')
{
    switch($status) {
        case '404':
            header("HTTP/1.1 404 Not Found");
            header('Location: ' . $url);
            break;
        case '301':
            header("HTTP/1.1 301 Moved Permanently");
            header('Location: ' . $url);
            break;
        default:
            header('Location: ' . $url);
            exit;
    }
}

?>