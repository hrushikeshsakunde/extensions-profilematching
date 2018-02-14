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
use \BuddySystem\Profilematching\Domain\Model\Userlink;
/**
 * The repository for Userlinks
 */
class UserlinkRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param int $userId
     * @return  Userlink[]
     */

    public function findByUser($userId )
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
            $query->equals('senderid', $userId),
                $query->equals('receiverid', $userId)
            )
        );
        return $query->execute();
    }


    /**
     * @param int $userId
     * @return  Userlink[]
     */

    public function findRequest($senderId,$recieverId)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('senderid', $senderId),
                $query->equals('receiverid', $recieverId)
            )
        );
        return $query->execute();
    }


    /**
     * @param  int $userId ,String $status
     * @return  Userlink[]
     */

    public function findRquestsBySenderId($userId,$status)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('senderid', $userId),
                $query->equals('status', $status)
            )
        );
        return $query->execute();
    }


    /**
     * @param  int $userId ,String $status
     * @return  Userlink[]
     */

    public function findRquestsByReceiverId($userId,$status)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('receiverid', $userId),
                $query->equals('status', $status)
            )
        );
        return $query->execute();
    }


}
