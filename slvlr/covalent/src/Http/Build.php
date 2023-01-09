<?php

namespace slvlr\covalent\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Build
{
    /**
     * The underlying Guzzle HTTP client.
     */
    protected ClientInterface $http;

    /**
     * The request options.
     */
    protected array $options = [];

    /**
     * Create a new HTTP client.
     */
    public function __construct()
    {
        $this->http = new Client();
        $this->options = [
            'http_errors' => false,
        ];
    }

    /**
     * Create a new HTTP client.
     */
    public static function build(): self
    {
        return new static();
    }

    /**
     * Set the base URL for the pending request.
     */
    public function baseUrl(string $url): self
    {
        $this->options['base_uri'] = $url;
        return $this;
    }



    /**
     * Send a GET request.
     */
    public function get(string $url): HttpResponse
    {
        return $this->send('GET', $url);
    }

    /**
     * Send a HEAD request.
     */
    public function head(string $url): HttpResponse
    {
        return $this->send('HEAD', $url);
    }

    /**
     * Send a POST request.
     */
    public function post(string $url): HttpResponse
    {
        return $this->send('POST', $url);
    }

    /**
     * Send a PUT request.
     */
    public function put(string $url): HttpResponse
    {
        return $this->send('PUT', $url);
    }

    /**
     * Send a PATCH request.
     */
    public function patch(string $url): HttpResponse
    {
        return $this->send('PATCH', $url);
    }

    /**
     * Send a DELETE request.
     */
    public function delete(string $url): HttpResponse
    {
        return $this->send('DELETE', $url);
    }


    /**
     * Send the pending request using the given HTTP method.
     */
    protected function send(string $method, string $url): HttpResponse
    {
        $response = $this->http->request($method, $url, $this->options);

        return new HttpResponse($response);
    }


}
