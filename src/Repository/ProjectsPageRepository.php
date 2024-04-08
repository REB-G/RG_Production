<?php

namespace App\Repository;

use App\Entity\ProjectsPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjectsPage>
 *
 * @method ProjectsPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectsPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectsPage[]    findAll()
 * @method ProjectsPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectsPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectsPage::class);
    }

    //    /**
    //     * @return ProjectsPage[] Returns an array of ProjectsPage objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ProjectsPage
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
