<?php

namespace CF\MessageBundle\Entity;

/**
 * ConversationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConversationRepository extends \Doctrine\ORM\EntityRepository
{
	public function getUserActu($user)
	{
		  $qb = $this->createQueryBuilder('c');
         
	      $qb->join('c.utilisateurs', 'u')
	         ->where('u = :user')
	         ->setParameter(':user', $user);
               
      return $qb->getQuery()->getResult();
	}
}