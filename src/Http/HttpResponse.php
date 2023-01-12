<?php

namespace slvlr\covalent\Http;

class HttpResponse {
    /**
     * The underlying PSR response.
     */
    protected $response;

    /**
     * Create a new HTTP response.
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Get the status code of the response.
     */
    public function getStatusCode(): int
    {
        return (int) $this->response->getStatusCode();
    }

    public function isSuccessful(): bool
    {
        return $this->getStatusCode() >= 200 && $this->getStatusCode() < 300;
    }


    public function getBody(): string
    {
        return (string) $this->response->getBody();
    }

    public function toObject(): object
    {
        $body = (string) $this->response->getBody();

        return json_decode($body) ?? (object) [];
    }

}
