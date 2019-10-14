<?php

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

/**
 * Class FeedType
 * @package PowerLinks\OpenRtb\BidRequest\Specification
 */
class FeedType
{
    use GetConstants;

    const MUSIC_SERVICE = 1;
    const BROADCAST = 2;
    const PODCAST = 3;
}
