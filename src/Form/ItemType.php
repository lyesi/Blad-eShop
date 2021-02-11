<?php

namespace App\Form;

use App\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Nom de l\'article'
                )
            ))
            ->add('price', IntegerType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Prix'
                )
            ))
            ->add('state', TextType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'État de l\'article'
                )
            ))
            ->add('localisation', TextType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Localisation'
                )
            ))
            ->add('description', TextType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Description'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }
}
