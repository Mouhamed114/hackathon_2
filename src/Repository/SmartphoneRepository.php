<?php

namespace App\Repository;

use App\Entity\Smartphone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Smartphone>
 *
 * @method Smartphone|null find($id, $lockMode = null, $lockVersion = null)
 * @method Smartphone|null findOneBy(array $criteria, array $orderBy = null)
 * @method Smartphone[]    findAll()
 * @method Smartphone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmartphoneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Smartphone::class);
    }

    public function save(Smartphone $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Smartphone $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function filter($criteria)
{
    $qb = $this->createQueryBuilder('s');

    if (!empty($criteria['etat'])) {
        $qb->andWhere('s.etat = :etat')
            ->setParameter('etat', $criteria['etat']);
    }
    
    if (!empty($criteria['stockage'])) {
        $qb->andWhere('s.stockage = :stockage')
            ->setParameter('stockage', $criteria['stockage']);
    }
    
    if (!empty($criteria['ram'])) {
        $qb->andWhere('s.ram = :ram')
            ->setParameter('ram', $criteria['ram']);
    }
    
    if (!empty($criteria['reseau'])) {
        $qb->andWhere('s.reseau = :reseau')
            ->setParameter('reseau', $criteria['reseau']);
    }

    return $qb->getQuery()->getResult();
}

//    /**
//     * @return Smartphone[] Returns an array of Smartphone objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Smartphone
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
