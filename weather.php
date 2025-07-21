<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$url = "https://api.open-meteo.com/v1/forecast?latitude=-32.4&longitude=20.7&hourly=temperature_2m,relativehumidity_2m,cloudcover,windspeed_10m,is_day&past_days=92&forecast_days=7&timezone=UTC";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'ClearSkyChart/1.0');
$result = curl_exec($ch);
$err = curl_error($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($result === false || $code >= 400) {
    http_response_code(502);
    echo json_encode(["error" => $err ?: "Failed to fetch data", "status" => $code]);
} else {
    echo $result;
}
?>
