<?php

namespace Dexnode\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * Book
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dexnode\BookBundle\Entity\BookRepository")
 */
class Book
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
     * @ORM\ManyToMany(targetEntity="Dexnode\BookBundle\Entity\Category", inversedBy="books")
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=128)
     */
    private $title;

    /**
     * @var string
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=24)
     */
    private $slug;    

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=128)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="date")
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ISBN_13", type="string", length=24)
     */
    private $iSBN13;

    /**
     * @var integer
     *
     * @ORM\Column(name="pages_count", type="integer")
     */
    private $pagesCount;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=128)
     */
    private $publisher;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_processed", type="boolean")
     */
    private $isProcessed;

    /**
     * @var string
     *
     * @ORM\Column(name="content_filename", type="string", length=255)
     */
    private $contentFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="image_filename", type="string", length=255)
     */
    private $imageFilename;

    /**
     * @var integer
     *
     * @ORM\Column(name="words_processed", type="bigint")
     */
    private $wordsProcessed;

    /**
     * @var integer
     *
     * @ORM\Column(name="lines_processed", type="bigint")
     */
    private $linesProcessed;

    /**
     * @var decimal
     *
     * @ORM\Column(name="score", type="decimal", precision=3, scale=2)
     */
    private $score;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


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
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }    

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Book
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return Book
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set iSBN13
     *
     * @param string $iSBN13
     * @return Book
     */
    public function setISBN13($iSBN13)
    {
        $this->iSBN13 = $iSBN13;

        return $this;
    }

    /**
     * Get iSBN13
     *
     * @return string 
     */
    public function getISBN13()
    {
        return $this->iSBN13;
    }

    /**
     * Set pagesCount
     *
     * @param integer $pagesCount
     * @return Book
     */
    public function setPagesCount($pagesCount)
    {
        $this->pagesCount = $pagesCount;

        return $this;
    }

    /**
     * Get pagesCount
     *
     * @return integer 
     */
    public function getPagesCount()
    {
        return $this->pagesCount;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return Book
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set isProcessed
     *
     * @param boolean $isProcessed
     * @return Book
     */
    public function setIsProcessed($isProcessed)
    {
        $this->isProcessed = $isProcessed;

        return $this;
    }

    /**
     * Get isProcessed
     *
     * @return boolean 
     */
    public function getIsProcessed()
    {
        return $this->isProcessed;
    }

    /**
     * Set contentFilename
     *
     * @param string $contentFilename
     * @return Book
     */
    public function setContentFilename($contentFilename)
    {
        $this->contentFilename = $contentFilename;

        return $this;
    }

    /**
     * Get contentFilename
     *
     * @return string 
     */
    public function getContentFilename()
    {
        return $this->contentFilename;
    }

    /**
     * Set imageFilename
     *
     * @param string $imageFilename
     * @return Book
     */
    public function setImageFilename($imageFilename)
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    /**
     * Get imageFilename
     *
     * @return string 
     */
    public function getImageFilename()
    {
        return $this->imageFilename;
    }



    /**
     * Set wordsProcessed
     *
     * @param integer $wordsProcessed
     * @return Book
     */
    public function setWordsProcessed($wordsProcessed)
    {
        $this->wordsProcessed = $wordsProcessed;

        return $this;
    }

    /**
     * Get wordsProcessed
     *
     * @return integer 
     */
    public function getWordsProcessed()
    {
        return $this->wordsProcessed;
    }

    /**
     * Set linesProcessed
     *
     * @param integer $linesProcessed
     * @return Book
     */
    public function setLinesProcessed($linesProcessed)
    {
        $this->linesProcessed = $linesProcessed;

        return $this;
    }

    /**
     * Get linesProcessed
     *
     * @return integer 
     */
    public function getLinesProcessed()
    {
        return $this->linesProcessed;
    }

    /**
     * Set score
     *
     * @param float $score
     * @return Book
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return float 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Book
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Book
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Book
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return Book
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categories
     *
     * @param \Dexnode\BookBundle\Entity\Category $categories
     * @return Book
     */
    public function addCategory(\Dexnode\BookBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Dexnode\BookBundle\Entity\Category $categories
     */
    public function removeCategory(\Dexnode\BookBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
