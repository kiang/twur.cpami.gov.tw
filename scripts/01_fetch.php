<?php
$basePath = dirname(__DIR__);
$baseUrl = 'https://twur.cpami.gov.tw/api/tgos/get_update_area?city_id=';
$cities = [
    '1' => '基隆市',
'2' => '臺北市',
'3' => '新北市',
'4' => '桃園市',
'5' => '新竹縣',
'6' => '新竹市',
'7' => '苗栗縣',
'8' => '臺中市',
'9' => '南投縣',
'10' => '彰化縣',
'11' => '雲林縣',
'12' => '嘉義市',
'13' => '嘉義縣',
'14' => '臺南市',
'15' => '高雄市',
'16' => '屏東縣',
'17' => '宜蘭縣',
'18' => '花蓮縣',
'19' => '臺東縣',
'20' => '澎湖縣',
'21' => '連江縣',
'22' => '金門縣',
];
foreach($cities AS $cityKey => $city) {
    $json = json_decode(file_get_contents($baseUrl . $cityKey));
    file_put_contents($basePath . '/raw/' . $city . '.json', json_encode($json, JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
}