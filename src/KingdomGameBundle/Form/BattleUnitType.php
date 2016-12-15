<?php

namespace KingdomGameBundle\Form;

use KingdomGameBundle\Entity\Battle;
use KingdomGameBundle\Entity\BattleUnits;
use KingdomGameBundle\Entity\Unit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BattleUnitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('unit', EntityType::class, [
                'class' => Unit::class
            ])
            ->add('amount', IntegerType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => BattleUnits::class,
        ));
    }

    public function getName()
    {
        return 'kingdom_game_bundle_battle_unit';
    }
}
