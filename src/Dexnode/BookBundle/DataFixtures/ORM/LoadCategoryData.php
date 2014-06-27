<?php
// src/Dexnode/BookBundle/DataFixtures/ORM/LoadCategoryData.php

namespace Dexnode\BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dexnode\BookBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
	private $categories_data = array(
	    "cat1" => array(
	        "nameEn" =>'Classic',
	        "nameFr" =>'Classique',
	        "slugEn" =>'books-classic',
	        "slugFr" =>'livres-classique',
	        "isActive" => true
	    ),
	    "cat2" => array(
	        "nameEn" =>'Fantastic',
	        "nameFr" =>'Fantastique',
	        "slugEn" =>'books-fantastic',
	        "slugFr" =>'livres-fantastique',
	        "isActive" => true
	    ),
	    "cat3" => array(
	        "nameEn" =>'Fantasy',
	        "nameFr" =>'Fantasy',
	        "slugEn" =>'books-fantasy',
	        "slugFr" =>'livres-fantasy',
	        "isActive" => true
	    ),
	    "cat4" => array(
	        "nameEn" =>'Movies and TV shows',
	        "nameFr" =>'Films et Séries TV',
	        "slugEn" =>'books-movies-and-tv-shows',
	        "slugFr" =>'livres-films-et-series-tv',
	        "isActive"=> true
	    ),
	    "cat5" => array(
	        "nameEn" =>'Mystery & crime',
	        "nameFr" =>'Policier',
	        "slugEn" =>'books-mystery-and-crime',
	        "slugFr" =>'livres-policier',
	        "isActive"=> true
	    ),
	    "cat7" => array(
	        "nameEn" =>'Science Fiction',
	        "nameFr" =>'Science-Fiction',
	        "slugEn" =>'books-science-fiction',
	        "slugFr" =>'livres-science-fiction',
	        "isActive" => true
	    ),
	    "cat8" => array(
	        "nameEn" =>'Horror',
	        "nameFr" =>'Terreur',
	        "slugEn" =>'books-horror',
	        "slugFr" =>'livres-terreur',
	        "isActive" => true
	    ),
	    "cat9" => array(
	        "nameEn" =>'Thriller',
	        "nameFr" =>'Thriller',
	        "slugEn" =>'books-thriller',
	        "slugFr" =>'livres-thriller',
	        "isActive" => true
	    )		
	);
	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager)
	{
		$repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');

		foreach ($this->categories_data as $_ref => $_cols) 
		{
			$categorieObj  = new Category();			
			foreach ($_cols as $_colName => $_data)
			{
				if($_colName == 'nameFr' )
				{
					$categorieObj->setName($_data);
				}
				elseif ($_colName == 'nameEn') 
				{
					$repository->translate($categorieObj, 'name', 'en', $_data);
				}
				elseif($_colName == 'slugFr' )
				{
					$categorieObj->setSlug($_data);
				}
				elseif ($_colName == 'slugEn') 
				{
					$repository->translate($categorieObj, 'slug', 'en', $_data);
				}				
				else
				{
					$categorieObj->{'set'.ucfirst($_colName)}( $_data);
				}

			}

			$manager->persist($categorieObj);
			$manager->flush();
			$this->setReference($_ref, $categorieObj);			
		}
	}

	/**
	 * {@inheritDoc}
	 */
	 public function getOrder()
	 {
	 	return 1;
	 }		
}