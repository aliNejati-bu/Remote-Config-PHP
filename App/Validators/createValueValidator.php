<?php


return [
    "name" => ['required', 'alpha_dash', 'min:3', 'max:30'],
    "value" => ['required', "string", 'min:1', 'max:1024'],
    "config_id" => ['required', "numeric"],
    "app_id" => ['required', "numeric"],
];