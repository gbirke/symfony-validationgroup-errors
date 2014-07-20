<?php

namespace Birke\FormtestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TestData
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TestData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="defaultField", type="string", length=255)
     */
    private $defaultField;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"one"})
     * @ORM\Column(name="groupOneField", type="string", length=255)
     */
    private $groupOneField;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"one"})
     * @ORM\Column(name="groupTwoField", type="string", length=255)
     */
    private $groupTwoField;

    /**
     * @var string
     *
     * @ORM\Column(name="vGroups", type="string", length=255)
     */
    private $vGroups = 'Default';


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set defaultField
     *
     * @param string $defaultField
     * @return TestData
     */
    public function setDefaultField($defaultField)
    {
        $this->defaultField = $defaultField;

        return $this;
    }

    /**
     * Get defaultField
     *
     * @return string 
     */
    public function getDefaultField()
    {
        return $this->defaultField;
    }

    /**
     * Set groupOneField
     *
     * @param string $groupOneField
     * @return TestData
     */
    public function setGroupOneField($groupOneField)
    {
        $this->groupOneField = $groupOneField;

        return $this;
    }

    /**
     * Get groupOneField
     *
     * @return string 
     */
    public function getGroupOneField()
    {
        return $this->groupOneField;
    }

    /**
     * Set groupTwoField
     *
     * @param string $groupTwoField
     * @return TestData
     */
    public function setGroupTwoField($groupTwoField)
    {
        $this->groupTwoField = $groupTwoField;

        return $this;
    }

    /**
     * Get groupTwoField
     *
     * @return string 
     */
    public function getGroupTwoField()
    {
        return $this->groupTwoField;
    }


    /**
     * Set vGroups
     *
     * @param string $vGroups
     * @return TestData
     */
    public function setVGroups($vGroups)
    {
        $this->vGroups = $vGroups;

        return $this;
    }

    /**
     * Get vGroups
     *
     * @return string 
     */
    public function getVGroups()
    {
        return $this->vGroups;
    }

}
