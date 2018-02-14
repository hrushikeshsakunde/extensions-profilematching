<?php
namespace BuddySystem\Profilematching\Service;
/**
 * Created by PhpStorm.
 * User: hrushi
 * Date: 20/01/2018
 * Time: 02:11
 */

use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use BuddySystem\Profilematching\Domain\Model\Userdetails;

class SessionService
{



    public function getUserDetails():Userdetails
    {
        $frontendUserId = $this->getFrontendUserId();

        if (empty($frontendUserId)) {
            throw new InvalidSessionException(
                'No frontend user logged in',
                1512943193
            );
        }
        else{

            $userDetails = new Userdetails();
            $userDetails->setUserid($this->getFrontendUserId());
            $userDetails->setFullname($this->getFrontendUserFullName());
            $userDetails->setEmail($this->getFrontendUserEmail());
            $userDetails->setGender($this->getFrontendUserGender());

            return $userDetails;
        }



    }


    /**
     * @return String
     */
    public function getFrontendUserGender()
    {
      echo $this->getFrontendController()->fe_user->user['gender'] ;
        if($this->getFrontendController()->fe_user->user['gender'] ===  0)
        {
            return 'male';
        }
        else
        {
            return 'female';
        }


    }


    /**
     * @return String|null
     */
    public function getFrontendUserTitle()
    {

        return $this->getFrontendController()->fe_user->user['title'] ?? null;
    }


    /**
     * @return String|null
     */
    public function getFrontendUserEmail()
    {

        return $this->getFrontendController()->fe_user->user['email'] ?? null;
    }


    /**
     * @return String|null
     */
    public function getFrontendUserFullName()
    {

        return $this->getFrontendController()->fe_user->user['name'] ?? null;
    }

    /**
     * @return int|null
     */
    public function getFrontendUserId()
    {

        return $this->getFrontendController()->fe_user->user['uid'] ?? null;
    }

    /**
     * @return TypoScriptFrontendController
     * @internal Exposed as protected to be testable with method mocks
     */
    protected function getFrontendController()
    {
        return $GLOBALS['TSFE'];
    }

}