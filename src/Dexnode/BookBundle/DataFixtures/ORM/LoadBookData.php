<?php
// src/Dexnode/BookBundle/DataFixtures/ORM/LoadBookData.php

namespace Dexnode\BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dexnode\BookBundle\Entity\Book;

class LoadBookData extends AbstractFixture implements OrderedFixtureInterface
{
	private $books_data = array(
	    "book1" => array(
	        "title" =>   'Alice in wonderland',
	        "author" =>  'Lewis Carroll',
	        "description" =>  'In 1865, Charles Lutwidge Dodson composed a fantasy tale for a trio of young sisters. His creative genius and childlike ability to imagine a universe like no other took form in one of the most treasured children s books of all time. Under the pen-name of Lewis Carroll, Dodson s tale of an intrepid little girl who discovers a surreal, beautiful, and dangerous land would has shared its magic with generations of readers. His Cheshire Cat, Mad Hatter, and Queen of Hearts have become cultural icons, to say nothing of the heroic young Alice herself.',
	        "language" =>  'en',
	        "releaseDate" =>  '1869-01-01',
	        "ISBN13" =>  '978-1619490222',
	        "pagesCount" =>  108,
	        "publisher" =>  'Carroll Press',
	        "isProcessed" =>  true,
	        "contentFilename" =>  '/books/en/alice_in_wonderland---1396881301.txt',
	        "imageFilename" =>  '/books/en/alice_in_wonderland---1396881301.jpg',
	        "wordsProcessed" =>  10,
	        "linesProcessed" =>  20,
	        "score" =>  1,
	        "isActive" =>  true,
	        "isDeleted" =>  false,
	        "updatedAt" => 'NOW',
	        "createdAt" => 'NOW',
	        "categories" => array("cat1", "cat2")
	    ),
	    "book2" => array(
	        "title" =>   'Alice in wonderland 2',
	        "author" =>  'Lewis Carroll',
	        "description" =>  'In 1865, Charles Lutwidge Dodson composed a fantasy tale for a trio of young sisters. His creative genius and childlike ability to imagine a universe like no other took form in one of the most treasured children s books of all time. Under the pen-name of Lewis Carroll, Dodson s tale of an intrepid little girl who discovers a surreal, beautiful, and dangerous land would has shared its magic with generations of readers. His Cheshire Cat, Mad Hatter, and Queen of Hearts have become cultural icons, to say nothing of the heroic young Alice herself.',
	        "language" =>  'en',
	        "releaseDate" =>  '1869-01-01',
	        "ISBN13" =>  '978-1619490222',
	        "pagesCount" =>  108,
	        "publisher" =>  'Carroll Press',
	        "isProcessed" =>  true,
	        "contentFilename" =>  '/books/en/alice_in_wonderland---1396881301.txt',
	        "imageFilename" =>  '/books/en/alice_in_wonderland---1396881301.jpg',
	        "wordsProcessed" =>  10,
	        "linesProcessed" =>  20,
	        "score" =>  4,
	        "isActive" =>  true,
	        "isDeleted" =>  false,
	        "updatedAt" => 'NOW',
	        "createdAt" => 'NOW',
	        "categories" => array("cat1", "cat2")
	    ),
	    "book3" => array(
	        "title" =>   'Alice in wonderland 3',
	        "author" =>  'Lewis Carroll',
	        "description" =>  'In 1865, Charles Lutwidge Dodson composed a fantasy tale for a trio of young sisters. His creative genius and childlike ability to imagine a universe like no other took form in one of the most treasured children s books of all time. Under the pen-name of Lewis Carroll, Dodson s tale of an intrepid little girl who discovers a surreal, beautiful, and dangerous land would has shared its magic with generations of readers. His Cheshire Cat, Mad Hatter, and Queen of Hearts have become cultural icons, to say nothing of the heroic young Alice herself.',
	        "language" =>  'en',
	        "releaseDate" =>  '1869-01-01',
	        "ISBN13" =>  '978-1619490222',
	        "pagesCount" =>  108,
	        "publisher" =>  'Carroll Press',
	        "isProcessed" =>  true,
	        "contentFilename" =>  '/books/en/alice_in_wonderland---1396881301.txt',
	        "imageFilename" =>  '/books/en/alice_in_wonderland---1396881301.jpg',
	        "wordsProcessed" =>  10,
	        "linesProcessed" =>  20,
	        "score" =>  2,
	        "isActive" =>  true,
	        "isDeleted" =>  false,
	        "updatedAt" => 'NOW',
	        "createdAt" => 'NOW',
	        "categories" => array("cat1", "cat2")
	    )

	);

	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager)
	{
		foreach ($this->books_data as $_ref => $_cols) 
		{
			$bookObj  = new Book();
			foreach ($_cols as $_colName => $_data) 
			{
				if($_colName != "categories")
				{
					if(in_array($_colName, array("releaseDate","updatedAt","createdAt")))
						$_data = new \DateTime($_data);	

					$bookObj->{'set'.ucfirst($_colName)}( $_data);
					$cat_reference[$_ref] = $bookObj;					
				}
				else
				{
					foreach ($_data as $_cat_ref) 
					{
						$bookObj->addCategory($this->getReference($_cat_ref));
					}					
				}
			}

			$manager->persist($bookObj);
			$manager->flush();
			$this->setReference($_ref, $bookObj);
		}	
	}

	/**
	 * {@inheritDoc}
	 */
	 public function getOrder()
	 {
	 	return 2;
	 }	
}