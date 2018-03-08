<?php
/**
 * Created by PhpStorm.
 * User: anamaria.ioan
 * Date: 3/8/2018
 * Time: 6:22 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Application;
use Doctrine\ORM\EntityRepository;

class ApplicationRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('applications')
            ->orderBy('applications.application', 'ASC')
            ;
    }
    /**
     * @return Application
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findAny()
    {
        return $this->createQueryBuilder('application')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
