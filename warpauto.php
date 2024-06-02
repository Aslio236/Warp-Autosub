<?php

    $getList = file_get_contents('https://raw.githubusercontent.com/mansor427/Warp-ip-auto/main/warp.json?v1.'.time());
    $strings = explode("\n", $getList);

    $warp = "//profile-title: base64:44CY4oC0yrfhtYPKs+G1luKAt+OAmfCThILwk4aD\n";
    $warp .= "//profile-update-interval: 24\n";
    $warp .= "//subscription-userinfo: upload=0; download=0; total=10737418240000000; expire=0\n";
    $warp .= "//profile-web-page-url: https://github.com/mansor427\n\n";
    $warp .= "warp://auto#🇮🇷 @mansor427 &&detour=warp://auto#🇩🇪 ÐΛɌ₭ᑎΞ𐒡𐒡";

    $warp .= "warp://@auto/?ifp=5-10#🇮🇷 @mansor427 &&detour=warp://@auto/?ifp=5-10#🇩🇪 ÐΛɌ₭ᑎΞ𐒡𐒡";

   $i = 1;
$pattern = '/^warp:\/\/.*$/';
$first_ip = '';
$second_ip = '';

foreach ($strings as $val) {
    if ($i > 2) {
        break;
    }

    if (preg_match($pattern, $val) && !str_contains($val, '&&detour=')) {
        if ($i == 1) {
            $first_ip = $val;
        } elseif ($i == 2) {
            $second_ip = $val;
        }

        $i++;
    }
}

$warp .= "\n" . $first_ip . '#@mansor427 🇮🇷 IP&&detour=' . $second_ip . '#ÐΛɌ₭ᑎΞ𐒡𐒡 🇩🇪 IP';

    file_put_contents("subwarp/warp", $warp);
