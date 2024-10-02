<?php

class PagesTitleModel {

    private static $title;

    public static function title($string) {
        self::$title = $string;
    }

    public static function getTitle() {
        return self::$title;
    }
}

