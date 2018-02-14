<?php
namespace BuddySystem\Profilematching\Domain\Model;

/***
 *
 * This file is part of the "Profile_Matching" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Hrushikesh Sakunde <sakundehrushi@gmail.com>, buddysystem
 *
 ***/

/**
 * Userlink
 */
class Userlink extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * senderid
     *
     * @var int
     * @validate NotEmpty
     */
    protected $senderid = 0;

    /**
     * receiverid
     *
     * @var int
     * @validate NotEmpty
     */
    protected $receiverid = 0;

    /**
     * status
     *
     * @var string
     * @validate NotEmpty
     */
    protected $status = '';

    /**
     * Returns the senderid
     *
     * @return int $senderid
     */
    public function getSenderid()
    {
        return $this->senderid;
    }

    /**
     * Sets the senderid
     *
     * @param int $senderid
     * @return void
     */
    public function setSenderid($senderid)
    {
        $this->senderid = $senderid;
    }

    /**
     * Returns the receiverid
     *
     * @return int $receiverid
     */
    public function getReceiverid()
    {
        return $this->receiverid;
    }

    /**
     * Sets the receiverid
     *
     * @param int $receiverid
     * @return void
     */
    public function setReceiverid($receiverid)
    {
        $this->receiverid = $receiverid;
    }

    /**
     * Returns the status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
