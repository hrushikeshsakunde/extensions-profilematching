<?php
namespace BuddySystem\Profilematching\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class UserdetailsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\Profilematching\Domain\Model\Userdetails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BuddySystem\Profilematching\Domain\Model\Userdetails();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUseridReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUserid()
        );
    }

    /**
     * @test
     */
    public function setUseridForIntSetsUserid()
    {
        $this->subject->setUserid(12);

        self::assertAttributeEquals(
            12,
            'userid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFullnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFullname()
        );
    }

    /**
     * @test
     */
    public function setFullnameForStringSetsFullname()
    {
        $this->subject->setFullname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fullname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGender()
        );
    }

    /**
     * @test
     */
    public function setGenderForStringSetsGender()
    {
        $this->subject->setGender('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gender',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMajorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMajor()
        );
    }

    /**
     * @test
     */
    public function setMajorForStringSetsMajor()
    {
        $this->subject->setMajor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'major',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLanguageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLanguage()
        );
    }

    /**
     * @test
     */
    public function setLanguageForStringSetsLanguage()
    {
        $this->subject->setLanguage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'language',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getActivityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getActivity()
        );
    }

    /**
     * @test
     */
    public function setActivityForStringSetsActivity()
    {
        $this->subject->setActivity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'activity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVisitedplacesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVisitedplaces()
        );
    }

    /**
     * @test
     */
    public function setVisitedplacesForStringSetsVisitedplaces()
    {
        $this->subject->setVisitedplaces('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'visitedplaces',
            $this->subject
        );
    }
}
