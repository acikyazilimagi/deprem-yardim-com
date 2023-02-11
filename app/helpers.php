<?php

function getApiKeys()
{
    return json_decode(config('services.api.keys')) ?? [];
}
