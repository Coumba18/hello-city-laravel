<?php

if(!function_exists('page_title')) {
    function page_title(?string $pageTitle = null): string {
        if($pageTitle == null) {
            return config('app.name');
        } else {
            return $pageTitle. '|'. config('app.name');
        }

        // OU ENCORE DIRE
        // return $pageTitle ?
        // $pageTitle. '|'. config('app.name')
        // : config('app.name');
    }
}