<?php

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

/**
 * Class LocationService
 * @package PowerLinks\OpenRtb\BidRequest\Specification
 */
class LocationService
{
    use GetConstants;

    const IP2LOCATION = 1;
    const NEUSTAR = 2;
    const MAXMIND = 3;
    const NETAQUITY = 4;
}
