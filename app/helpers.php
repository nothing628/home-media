<?php

if (!function_exists('storage_url')) {
    function storage_url($path) {
        $storage = app()->make('filesystem');

        return $storage->url($path);
    }
}
