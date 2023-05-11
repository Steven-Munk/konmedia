<?php

namespace App\Form\Type;

use App\Entity\AdressbuchEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressbuchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Ort', TextType::class,['empty_data'=>'']);
        $builder->add('Strasse', TextType::class,['empty_data'=>'']);
        $builder->add('Postleitzahl', NumberType::class);
        $builder->add('Adresse_hinzufuegen', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>AdressbuchEntity::class,
            'csrf_protection' => true,
        ]);
    }
}
