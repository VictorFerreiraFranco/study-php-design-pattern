<?php

namespace Study\Design\HTML\core;

enum InputType: string
{
    case TEXT = 'text';
    case PASSWORD = 'password';
    case EMAIL = 'email';
    case URL = 'url';
    case TEL = 'tel';
    case SEARCH = 'search';
    case NUMBER = 'number';
    case RANGE = 'range';
    case DATE = 'date';
    case DATETIME_LOCAL = 'datetime-local';
    case MONTH = 'month';
    case WEEK = 'week';
    case TIME = 'time';
    case CHECKBOX = 'checkbox';
    case RADIO = 'radio';
    case COLOR = 'color';
    case FILE = 'file';
    case HIDDEN = 'hidden';
}
