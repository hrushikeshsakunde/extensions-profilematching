<?php
namespace BuddySystem\Profilematching\Controller;

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
use BuddySystem\Profilematching\Domain\Model\Userdetails;
use BuddySystem\Profilematching\Domain\Model\Userlink;
use BuddySystem\Profilematching\Service\SessionService;
/**
 * UserdetailsController
 */
class UserdetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * userdetailsRepository
     *
     * @var \BuddySystem\Profilematching\Domain\Repository\UserdetailsRepository
     * @inject
     */
    protected $userdetailsRepository = null;

    /**
     * @var SessionService
     */
    private $sessionService;


    /**
     * @param SessionService $sessionService
     */
    public function injectSessionService(SessionService $sessionService)
    {
        $this->sessionService = $sessionService;
    }


    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $userdetails = $this->userdetailsRepository->findAll();
        $this->view->assign('userdetailss', $userdetails);
    }

    /**
     * action show
     *
     * @param \BuddySystem\Profilematching\Domain\Model\Userdetails $userdetails
     * @return void
     */
    public function showAction()
    {
        $result = $this->userdetailsRepository->findByUserId($this->sessionService->getFrontendUserId());
        $this->view->assign('userdetailss', $result);
    }


    protected  function initializeAction()
    {
        parent::initializeAction(); // TODO: Change the autogenerated stub


    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction(\BuddySystem\Profilematching\Domain\Model\Userdetails $newUserdetails=null )
    {
        $result = $this->userdetailsRepository->findByUserId($this->sessionService->getFrontendUserId());

        if($result->count() != 0 )
        {
            $this->redirect('show');
        }
        else
        {
                if($newUserdetails === null)
                {
                    $newUserdetails = new Userdetails();
                    $newUserdetails->setUserid($this->sessionService->getFrontendUserId());
                    $newUserdetails->setTitle($this->sessionService->getFrontendUserTitle());
                    $newUserdetails->setFullname($this->sessionService->getFrontendUserFullName());
                    $newUserdetails->setEmail($this->sessionService->getFrontendUserEmail());
                    $newUserdetails->setGender($this->sessionService->getFrontendUserGender());

                }

                $this->view->assign('newUserdetails',$newUserdetails);
        }




    }

    /**
     * action create
     *
     * @param \BuddySystem\Profilematching\Domain\Model\Userdetails $newUserdetails
     * @return void
     */
    public function createAction(\BuddySystem\Profilematching\Domain\Model\Userdetails $newUserdetails)
    {

        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->userdetailsRepository->add($newUserdetails);
        $this->redirect('show');

    }

    public function gotoHomeAction()
    {
        $uriBuilder = $this->uriBuilder;
        $uri = $uriBuilder
            ->setTargetPageUid(1)
            ->build();
        $this->redirectToUri($uri, 0, 404);

    }



}
