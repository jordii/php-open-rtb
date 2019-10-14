<?php

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

/**
 * Class VolumeNormalizationMode
 * @package PowerLinks\OpenRtb\BidRequest\Specification
 */
class VolumeNormalizationMode
{
    use GetConstants;

    const NONE = 0;
    const AVERAGE_VOLUME = 1;
    const PEAK_VOLUME = 2;
    const LOUDNESS = 3;
    const CUSTOM_VOLUME = 4;
}
