<?php

$url = "https://joao:12345@hcode.com.br:443/blog?extra=abc#home";

print_r((parse_url($url, PHP_URL_HOST)));