<?php

namespace Study\Design\SCAJ\Process\State;

enum State: string
{
    case PENDDING = 'pendding';
    case AWAITING_VALIDATION = 'awaiting_validation';
    case RECTIFY = 'rectify';
    case VALIDATED = 'validated';
    case FINALIZED = 'finalized';
}
