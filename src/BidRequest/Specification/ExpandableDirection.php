<?php

namespace PowerLinks\OpenRtb\BidRequest\Specification;


use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

class ExpandableDirection
{
    use GetConstants;
    const LEFT = 1;
    const RIGHT = 2;
    const UP = 3;
    const DOWN = 4;
    const EXPANDABLE_FULLSCREEN = 5;
}
