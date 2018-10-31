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
 $uid='9182554142';//10 digit mobile number

$pwd='123456789';

$phone='8886826301';

$msg='from way 2 sms master ' ;

include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $msg);
if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;

/*include('way2sms-api.php');

if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
    $res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;
}
*/












