<?php
/**
 * ApiFrameworks.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 28/08/15 - 14:44
 */

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

class ApiFrameworks
{
    use GetConstants;

    const VPAID_1 = 1;
    const VPAID_2 = 2;
    const MRAID_1 = 3;
    const ORMMA = 4;
    const MRAID_2 = 5;
    const MRAID_3 = 6;
    const OMID_1 = 7;
}
