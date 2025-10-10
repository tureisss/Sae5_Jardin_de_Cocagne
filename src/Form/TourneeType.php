<?php

namespace App\Form;

use App\Entity\Tournee;
use App\Entity\Depot;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TourneeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('depots', EntityType::class, [
                'class' => Depot::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true, // cases à cocher
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournee::class,
        ]);
    }
}
