<?php
/**
 * Created by phpstorm.
 * Author：kanin <990921093@qq.com>
 * Date: 2019/10/12
 * Time: 15:40
 */
ini_set('display_errors', 'on');
require "../vendor/autoload.php";

use sdf\workwx\exception\WorkWxExcetion;

$corpid = 'ww1b0f2d1180d85f64';
$secret = 'tg6OPTwzBS0j5k6477qi5ri-UFhnEO00EcqKuWuM5TY';
$agentId = '1000024';

try {
    $loginClient = new \sdf\workwx\client\UserClient($corpid, $secret, $agentId);
    $token = $loginClient->getAccessToken();

    $code = $_GET['code'];
    $data = $loginClient->getUserInfo($token, $code);
    var_dump($data);
} catch (WorkWxExcetion $exception) {
    var_dump($exception->getMessage());
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}
