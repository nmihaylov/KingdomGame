<?php
namespace KingdomGameBundle\Form;

use KingdomGameBundle\Entity\Unit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UnitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//        $entity =$builder->getData();
//        $entity->
//        $builder->add('unit_count', IntegerType::class);
//        $builder->add('unit_type', ChoiceType::class, 'choices => [] ');
//        $builder->add('unit_id', HiddenType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults(array(
                'data_class' => Unit::class,
            ));
    }

    public function getName()
    {
        return 'kingdom_game_bundle_unit';
    }
}
