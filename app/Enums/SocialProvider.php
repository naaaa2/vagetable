<?php 

namespace App\Enums;

enum SocialProvider: string
{
    case GitHub = 'github';
    case LINE = 'line';
}