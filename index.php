<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Component\HttpClient\CurlHttpClient;

$i = 0;
$count = intval($argv[1] ?? 500);
$client = new CurlHttpClient();
$responses = [];
do {
    $responses[] = $client->request('GET', 'https://httpbin.org/get', ['headers' => ['Accept' => 'application/json']]);
    ++$i;
} while ($i < $count);

\sleep(5);

foreach ($responses as $response) {
    $response->getStatusCode(); // wait for all responses
}
