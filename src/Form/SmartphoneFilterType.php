<?php
// src/Form/SmartphoneFilterType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class SmartphoneFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Occasion' => 'Occasion',
                    'Neuf' => 'Neuf',
                    'DEEE' => 'DEEE',
                    'REPARABLE' => 'REPARABLE',
                    'BLOQUE' => 'BLOQUE',
                    'RECONDITIONNE' => 'RECONDITIONNE',
                    'RECONDITIONABLE' => 'RECONDITIONABLE'
                ],
                'placeholder' => 'Tout état',
                'required' => false,
                'attr' => [
                    'class' => 'form-select mb-3 shadow'
                ],
            ])
            ->add('stockage', ChoiceType::class, [
                'choices' => [
                    '16 GB' => '16 Go',
                    '32 GB' => '32 Go',
                    '64 GB' => '64 Go',
                    '128 GB' => '128 Go',
                    '256 GB' => '256 Go',
                    '512 GB' => '512 Go',
                    '1 TB' => '1024 Go',
                    // Ajoutez d'autres options de stockage ici...
                ],
                'placeholder' => 'Tout stockage',
                'required' => false,
                'attr' => [
                    'class' => 'form-select mb-3 shadow'
                ],
            ])
            ->add('ram', ChoiceType::class, [
                'choices' => [
                    '2 GB' => '2 Go',
                    '4 GB' => '4 Go',
                    '6 GB' => '6 Go',
                    '8 GB' => '8 Go',
                    '12 GB' => '12 Go',
                    // Ajoutez d'autres options de RAM ici...
                ],
                'placeholder' => 'Toute RAM',
                'required' => false,
                'attr' => [
                    'class' => 'form-select mb-3 shadow'
                ],
            ])
            ->add('reseau', ChoiceType::class, [
                'choices' => [
                    '2G' => '2G',
                    '3G' => '3G',
                    '4G' => '4G',
                    '5G' => '5G',
                    // Ajoutez d'autres réseaux ici...
                ],
                'placeholder' => 'Tout réseau',
                'required' => false,
                'attr' => [
                    'class' => 'form-select mb-3 shadow'
                ],
            ])
            ->add('filtrer', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-3 shadow'
                ],
            ]);
    }
}



