<?php
/**
 * SetterValidationTracerTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 22/03/16 - 12:22
 */

namespace PowerLinks\OpenRtb\Tests\Tools\Traits;

use PHPUnit\Framework\TestCase;
use PowerLinks\OpenRtb\BidRequest\BidRequest;

class SetterValidationTracerTest extends TestCase
{
    public function testTracer()
    {
        try {
            $bidRequest = new BidRequest();
            $bidRequest->addCur(1);
        } catch (\Exception $e) {
            $this->assertStringContainsString(
                'PowerLinks\OpenRtb\BidRequest\BidRequest::addCur::474[validateString]',
                $e->getMessage()
            );
        }
    }
}
