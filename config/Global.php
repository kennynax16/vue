<?php
$nameIntegration = "";
$MsURL = "https://api.moysklad.ru/api/remap/1.2/";

return [
    //***legacy***
    'url' => env('APP_URL'),
    'url_int' => env('APP_URL_INTEGRATION'),
    'url_int_test' => env('APP_URL_TEST_INTEGRATION'),
    'appId' => env('APP_ID'),
    'appUid' => env('APP_UID'),
    'secretKey' => env('SECRET_KEY'),

    'APIKEY' => env('APP_APIKEY'),
    'APIKEY_TEST' => env('APP_TEST_APIKEY'),

    'moyskladVendorApiEndpointUrl' =>  'https://apps-api.moysklad.ru/api/vendor/1.0',
    'moyskladJsonApiEndpointUrl' =>  'https://api.moysklad.ru/api/remap/1.2',
];
