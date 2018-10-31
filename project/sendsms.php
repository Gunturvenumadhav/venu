<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,).
 * @param msg = Your Message ( Upto 140 Chars)
 */
 $uid='9182554142';
 $pwd='123456789';
 $msg='from';

$phone='9182554142';
include('way2sms-api.php');

    $res = sendWay2SMS('uid','pwd','phone','msg');
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'falses';
    else
        echo $res;
    exit;
}
