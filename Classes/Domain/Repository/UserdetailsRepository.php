<?php
namespace BuddySystem\Profilematching\Domain\Repository;

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
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
/**
 * The repository for Userdetails
 */
class UserdetailsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    public function findByUserId($userId )
    {
        $query = $this->createQuery();
        $query->matching(

            $query->equals('userid', $userId)
        );
        return $query->execute();
    }

    public function findUserNotInList($userId)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalNot(
                $query->in('userid', $userId)

            )
        );
        return $query->execute();
    }

    public function findUserInList($userId)
    {
        $query = $this->createQuery();
        $query->matching(
                $query->in('userid', $userId)
        );
        return $query->execute();


    }





}
