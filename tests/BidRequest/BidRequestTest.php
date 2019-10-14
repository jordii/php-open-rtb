<?php
/**
 * BidRequestTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 07/09/15 - 13:00
 */

namespace PowerLinks\OpenRtb\Tests\BidRequest;

use PHPUnit\Framework\TestCase;
use PowerLinks\OpenRtb\BidRequest\BidRequest;
use PowerLinks\OpenRtb\BidRequest\Imp;

class BidRequestTest extends TestCase
{
    public function test()
    {
        $imp = new Imp();
        $imp->setId('bbb');

        $bidRequest = new BidRequest();
        $bidRequest
            ->setId('aaa')
            ->addImp($imp)
        ;

        $this->assertTrue(is_array($bidRequest->toArray()));
    }
}
