<?php
namespace LaravelMySlug;

class Slug
{
    public static function index($string)
    {
        return str_slug($string,'-');
    }
}