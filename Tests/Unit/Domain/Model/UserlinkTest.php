<?php
namespace BuddySystem\Profilematching\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class UserlinkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\Profilematching\Domain\Model\Userlink
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BuddySystem\Profilematching\Domain\Model\Userlink();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSenderidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSenderid()
        );
    }

    /**
     * @test
     */
    public function setSenderidForIntSetsSenderid()
    {
        $this->subject->setSenderid(12);

        self::assertAttributeEquals(
            12,
            'senderid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReceiveridReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getReceiverid()
        );
    }

    /**
     * @test
     */
    public function setReceiveridForIntSetsReceiverid()
    {
        $this->subject->setReceiverid(12);

        self::assertAttributeEquals(
            12,
            'receiverid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }
}
