<?php
namespace async\traits;

use async\consts\Tags;

trait Format
{
    public static function getFormat():array
    {
        return [Tags::Color => Tags::ColorFormat, Tags::Line => Tags::LineFormat];
    }
}