<?php

namespace Study\Design\Settings;

enum Environment: string
{
    case DEVELOPING = 'DEVELOPING';
    
    case PRODUCTION = 'PRODUCTION';
}
