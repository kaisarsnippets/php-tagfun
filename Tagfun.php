<?php
// Replace tags by function output
class Tagfun {
    static function r($str, $tg1, $tg2, $fun) {
        $t1 = preg_quote($tg1, '/');
        $t2 = preg_quote($tg2, '/');
        $rx = "/$t1([\\s\\S]*?)$t2/";
        $str = preg_replace_callback
        ($rx, function($m) use (&$fun)
        { return $fun($m[1]);}, $str);
        preg_match($rx, $str) && $str =
        self::r($str, $tg1, $tg2, $fun);
        return $str;
    }
}
