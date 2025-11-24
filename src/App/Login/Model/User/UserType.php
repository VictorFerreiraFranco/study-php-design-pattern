<?php

namespace Study\Design\App\Login\Model\User;

enum UserType: string
{
    case ADMIN = 'admin';
    case REGULAR = 'regular';
}