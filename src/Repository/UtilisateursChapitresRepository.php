<?php

namespace App\Repository;

use App\Entity\Chapitres;
use App\Entity\UtilisateursChapitres;
use App\Repository\ChapitresRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UtilisateursChapitres>
 *
 * @method UtilisateursChapitres|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateursChapitres|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateursChapitres[]    findAll()
 * @method UtilisateursChapitres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateursChapitresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateursChapitres::class);
    }

    public function save(UtilisateursChapitres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UtilisateursChapitres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getUtilisateursChapitres(int $id, ChapitresRepository $chapitre_repository): ?array
    {
        return $this->createQueryBuilder('u')
                //->andWhere('u.chapitre = :chapitre')
                //->setParameter('chapitre', $id)
                ->orderBy('u.id', 'DESC')
                ->getQuery()
                ->getResult();
        $chapitreUtilisateur = $this->createQueryBuilder('u')
                                ->andWhere('u.chapitre = :chapitre')
                                ->setParameter('chapitre', $id)
                                ->orderBy('u.id', 'DESC')
                                ->getQuery()
                                ->getOneOrNullResult();
        if($chapitreUtilisateur != null) {
            $chapitre = $chapitre_repository->find($chapitreUtilisateur->getId());
        } else {
            $chapitre = $chapitre_repository->findBy(['cours' => $id])[0];
        }
        return $chapitre;
    }

//    /**
//     * @return UtilisateursChapitres[] Returns an array of UtilisateursChapitres objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UtilisateursChapitres
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

}
