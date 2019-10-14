<?php
/**
 * MapFactoryTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 21/09/15 - 11:25
 */

namespace PowerLinks\OpenRtb\Tests\Mapper;

use PHPUnit\Framework\TestCase;
use PowerLinks\OpenRtb\Mapper\MapFactory;

class MapFactoryTest extends TestCase
{
    public function testCreate()
    {
        $demoMap = [
            'BidRequest.Imp[].Native.Request:@required' => 'native',
            'BidRequest.Imp[].Id' => 'id'
        ];

        $map = MapFactory::create($demoMap);

        $this->assertEquals(['BidRequest.Imp[].Native.Request', 'BidRequest.Imp[].Id'],$map->getObjectPaths());
        $this->assertEquals(2,$map->count());
        $this->assertTrue($map->get('BidRequest.Imp[].Native.Request')->isRequired());
        $this->assertFalse($map->get('BidRequest.Imp[].Native.Request')->isUuid());
        $this->assertEquals('native', $map->get('BidRequest.Imp[].Native.Request')->getValue());

        foreach ($map as $item) {
            $this->assertInstanceOf('PowerLinks\OpenRtb\Mapper\MapItem', $item);
        }
    }

}
