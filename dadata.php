<?php

if($_POST['ip']){

    var_dump($_POST['ip']);

    $ch = curl_init('https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address?ip='.trim($_POST['ip']));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Token 3365840a169dd67828ab9127365d75c1becdeb62'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $res = curl_exec($ch);
    curl_close($ch); 
    $res = json_decode($res, true);
    var_dump($res);
}


?>