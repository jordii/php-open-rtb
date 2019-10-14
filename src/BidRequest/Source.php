<?php

namespace PowerLinks\OpenRtb\BidRequest;

use PowerLinks\OpenRtb\BidRequest\Specification\BitType;
use PowerLinks\OpenRtb\Tools\Interfaces\Arrayable;
use PowerLinks\OpenRtb\Tools\Traits\SetterValidation;
use PowerLinks\OpenRtb\Tools\Traits\ToArray;

/**
 * Class Source
 * @package PowerLinks\OpenRtb\BidRequest
 *
 * This object describes the nature and behavior of the entity that is the source of the bid request upstream from the exchange.
 * The primary purpose of this object is to define post-auction or upstream decisioning
 * when the exchange itself does not control the final decision. A common example of this is header bidding,
 * but it can also apply to upstream server entities such as another RTB exchange,
 * a mediation platform, or an ad server combines direct campaigns with 3rd party demand in decisioning.
 */
class Source implements Arrayable
{
    use SetterValidation;
    use ToArray;

    /**
     * Entity responsible for the final impression sale decision,
     * where 0 = exchange, 1 = upstream source. RECOMMENDED by the OpenRTB specification.
     *
     * @var int
     */
    protected $fd;

    /**
     * Transaction ID that must be common across all participants in this bid request
     * (e.g., potentially multiple exchanges). RECOMMENDED by the OpenRTB specification.
     * @var string
     */
    protected $tid;

    /**
     * Payment ID chain string containing embedded syntax described in the TAG Payment ID Protocol v1.0.
     * RECOMMENDED by the OpenRTB specification.
     * @var string
     */
    protected $pchain;

    /**
     * @return bool
     */
    public function getFd()
    {
        return $this->fd;
    }

    /**
     * @param $fd
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setFd($fd)
    {
        $this->validateIn($allimps, BitType::getAll());
        $this->fd = $fd;

        return $this;
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param $tid
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setTid($tid)
    {
        $this->validateString($tid);
        $this->tid = $tid;

        return $this;
    }

    /**
     * @return string
     */
    public function getPchain()
    {
        return $this->pchain;
    }

    /**
     * @param $pchain
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setPchain($pchain)
    {
        $this->validateSha1($pchain);
        $this->pchain = $pchain;

        return $this;
    }



}
