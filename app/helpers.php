<?php

function getApiKeys()
{
    return json_decode(env('API_KEYS'));
}
