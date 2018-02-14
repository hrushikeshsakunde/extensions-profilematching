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
 * Userdetails
 */
class Userdetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * userid
     *
     * @var int
     * @validate NotEmpty
     */
    protected $userid = 0;

    /**
     * major
     *
     * @var string
     * @validate NotEmpty
     */
    protected $major = '';

    /**
     * language
     *
     * @var string
     * @validate NotEmpty
     */
    protected $language = '';

    /**
     * activity
     *
     * @var string
     * @validate NotEmpty
     */
    protected $activity = '';

    /**
     * visitedplaces
     *
     * @var string
     * @validate NotEmpty
     */
    protected $visitedplaces = '';

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * fullname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $fullname = '';

    /**
     * email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';

    /**
     * gender
     *
     * @var string
     * @validate NotEmpty
     */
    protected $gender = '';

    /**
     * Returns the major
     *
     * @return string $major
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Sets the major
     *
     * @param string $major
     * @return void
     */
    public function setMajor($major)
    {
        $this->major = $major;
    }

    /**
     * Returns the language
     *
     * @return string $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the language
     *
     * @param string $language
     * @return void
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Returns the activity
     *
     * @return string $activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets the activity
     *
     * @param string $activity
     * @return void
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * Returns the visitedplaces
     *
     * @return string $visitedplaces
     */
    public function getVisitedplaces()
    {
        return $this->visitedplaces;
    }

    /**
     * Sets the visitedplaces
     *
     * @param string $visitedplaces
     * @return void
     */
    public function setVisitedplaces($visitedplaces)
    {
        $this->visitedplaces = $visitedplaces;
    }

    /**
     * Returns the userid
     *
     * @return int $userid
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Sets the userid
     *
     * @param int $userid
     * @return void
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the fullname
     *
     * @return string $fullname
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Sets the fullname
     *
     * @param string $fullname
     * @return void
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the gender
     *
     * @param string $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
