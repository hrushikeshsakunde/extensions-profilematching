<?php
namespace BuddySystem\Profilematching\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class UserlinkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\Profilematching\Controller\UserlinkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BuddySystem\Profilematching\Controller\UserlinkController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllUserlinksFromRepositoryAndAssignsThemToView()
    {

        $allUserlinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $userlinkRepository = $this->getMockBuilder(\BuddySystem\Profilematching\Domain\Repository\UserlinkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $userlinkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allUserlinks));
        $this->inject($this->subject, 'userlinkRepository', $userlinkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('userlinks', $allUserlinks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenUserlinkToUserlinkRepository()
    {
        $userlink = new \BuddySystem\Profilematching\Domain\Model\Userlink();

        $userlinkRepository = $this->getMockBuilder(\BuddySystem\Profilematching\Domain\Repository\UserlinkRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $userlinkRepository->expects(self::once())->method('add')->with($userlink);
        $this->inject($this->subject, 'userlinkRepository', $userlinkRepository);

        $this->subject->createAction($userlink);
    }
}
