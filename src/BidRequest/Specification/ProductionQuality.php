<?php

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

/**
 * Class VideoPlacementType
 * @package PowerLinks\OpenRtb\BidRequest\Specification
 */
class ProductionQuality
{
    use GetConstants;

    const QUALITY_UNKNOWN = 0;
    const PROFESSIONAL = 1;
    const PROSUMER = 2;
    const USER_GENERATED = 3;
}
