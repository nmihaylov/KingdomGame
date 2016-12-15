<?php

namespace KingdomGameBundle\Form;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Unit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KingdomUnitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('amount', IntegerType::class);
        $builder->add('unit', EntityType::class, [
            'class' => Unit::class,
            'attr' => [
                'type' => 'hidden'
            ]
        ]);
        $builder->add('kingdom', EntityType::class, [
            'class' => Kingdom::class,
            'attr' => [
                'type' => 'hidden'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => KingdomUnit::class,
        ));

    }

    public function getName()
    {
        return 'kingdom_game_bundle_unit_type';
    }
}
