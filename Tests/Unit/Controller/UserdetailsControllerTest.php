<?php
namespace BuddySystem\Profilematching\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class UserdetailsControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\Profilematching\Controller\UserdetailsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BuddySystem\Profilematching\Controller\UserdetailsController::class)
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
    public function listActionFetchesAllUserdetailssFromRepositoryAndAssignsThemToView()
    {

        $allUserdetailss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $userdetailsRepository = $this->getMockBuilder(\BuddySystem\Profilematching\Domain\Repository\UserdetailsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $userdetailsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allUserdetailss));
        $this->inject($this->subject, 'userdetailsRepository', $userdetailsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('userdetailss', $allUserdetailss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenUserdetailsToView()
    {
        $userdetails = new \BuddySystem\Profilematching\Domain\Model\Userdetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('userdetails', $userdetails);

        $this->subject->showAction($userdetails);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenUserdetailsToUserdetailsRepository()
    {
        $userdetails = new \BuddySystem\Profilematching\Domain\Model\Userdetails();

        $userdetailsRepository = $this->getMockBuilder(\BuddySystem\Profilematching\Domain\Repository\UserdetailsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $userdetailsRepository->expects(self::once())->method('add')->with($userdetails);
        $this->inject($this->subject, 'userdetailsRepository', $userdetailsRepository);

        $this->subject->createAction($userdetails);
    }
}
