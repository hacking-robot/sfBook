<?php

namespace Dexnode\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dexnode\BookBundle\Entity\CategoryRepository")
 */
class Category
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
     * @ORM\ManyToMany(targetEntity="Dexnode\BookBundle\Entity\Book", mappedBy="categories")
     */
    private $books;    

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=24)
     */
    private $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_fr", type="string", length=24)
     */
    private $nameFr;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_en", type="string", length=24)
     */
    private $slugEn;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_fr", type="string", length=24)
     */
    private $slugFr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;


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
     * Set nameEn
     *
     * @param string $nameEn
     * @return Category
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set nameFr
     *
     * @param string $nameFr
     * @return Category
     */
    public function setNameFr($nameFr)
    {
        $this->nameFr = $nameFr;

        return $this;
    }

    /**
     * Get nameFr
     *
     * @return string 
     */
    public function getNameFr()
    {
        return $this->nameFr;
    }

    /**
     * Set slugEn
     *
     * @param string $slugEn
     * @return Category
     */
    public function setSlugEn($slugEn)
    {
        $this->slugEn = $slugEn;

        return $this;
    }

    /**
     * Get slugEn
     *
     * @return string 
     */
    public function getSlugEn()
    {
        return $this->slugEn;
    }

    /**
     * Set slugFr
     *
     * @param string $slugFr
     * @return Category
     */
    public function setSlugFr($slugFr)
    {
        $this->slugFr = $slugFr;

        return $this;
    }

    /**
     * Get slugFr
     *
     * @return string 
     */
    public function getSlugFr()
    {
        return $this->slugFr;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Category
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add books
     *
     * @param \Dexnode\BookBundle\Entity\Book $books
     * @return Category
     */
    public function addBook(\Dexnode\BookBundle\Entity\Book $books)
    {
        $this->books[] = $books;

        return $this;
    }

    /**
     * Remove books
     *
     * @param \Dexnode\BookBundle\Entity\Book $books
     */
    public function removeBook(\Dexnode\BookBundle\Entity\Book $books)
    {
        $this->books->removeElement($books);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooks()
    {
        return $this->books;
    }
}
