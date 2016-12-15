<?php

namespace KingdomGameBundle\Form;

use Doctrine\DBAL\Types\IntegerType;
use Doctrine\ORM\EntityManager;
use KingdomGameBundle\Entity\Battle;
use KingdomGameBundle\Entity\BattleUnits;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Unit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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

        $builder->add("battleUnits", CollectionType::class, [
            'entry_type' => BattleUnitType::class,
            'allow_add' => true,
            'by_reference' => false,
        ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Battle::class,
        ));
    }

    public function getName()
    {
        return 'kingdom_game_bundle_battle_type';
    }
}
