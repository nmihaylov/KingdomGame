<?php

namespace KingdomGameBundle\Form;

use Doctrine\DBAL\Types\IntegerType;
use Doctrine\ORM\EntityManager;
use KingdomGameBundle\Entity\KingdomUnit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BattleType extends AbstractType
{
//    private $em;
//
//    public function __construct(EntityManager $em)
//    {
//
//        $this->em = $em;
//    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add()
//        $units = $this->em->getRepository(KingdomUnit::class)->findAll();
//        foreach ($units as $unit){
//            $builder->add($unit->getUnit()->getId(), IntegerType::INTEGER);
//        }

        $builder->add("villager", NumberType::class);
        $builder->add("warrior", NumberType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults(array(
//            'data_class' => KingdomUnit::class,
//        ));
    }

    public function getName()
    {
        return 'kingdom_game_bundle_battle_type';
    }
}
