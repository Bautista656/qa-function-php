<?php

use Google\CloudFunctions\FunctionsFramework;
use Psr\Http\Message\ServerRequestInterface;

FunctionsFramework::http('helloHttp', 'helloHttp');

function helloHttp(ServerRequestInterface $request): string
{
    // ?wait=N holds the request N seconds (3 at most) and says which worker served it:
    // requests sent at once show whether one waited for another.
    $wait = min(3, max(0, (int) ($request->getQueryParams()['wait'] ?? 0)));
    if ($wait > 0) {
        sleep($wait);
        return 'Hello from a PHP function on CXF! pid ' . getmypid();
    }
    return 'Hello from a PHP function on CXF!';
}
