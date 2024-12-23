<?php

namespace Slvler\Covalent\Http;

interface BuildAdapter
{
    public function get($url, $params = []);

    public function post($url, $params = []);

    public function delete($url);

    public function request($url, $method, $params = []);

    public function contents();
}
