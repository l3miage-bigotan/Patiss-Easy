<?php

namespace App\Form;

use App\Entity\Recette;
use App\Entity\Categorie;
use App\Entity\Ustensile;
use App\Entity\Astuce;
use App\Entity\Theme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('recette')
            ->add('descriptionrecette')
            ->add('petitephrase')
            ->add('idcateg', EntityType::class, [
                'label' => "Catégorie",
                'class' => Categorie::class,
                'multiple' => true,
                'choice_label' => "categorie",
                'attr' => ['class' => "selectpicker","multiple" => "", 'data-live-search' => "true", 'title' => "Catégories"],
            ])
            ->add('idustensile', EntityType::class, [
                'label' => "Ustensile",
                'class' => Ustensile::class,
                'multiple' => true,
                'choice_label' => "ustensile",
                'attr' => ['class' => "selectpicker","multiple" => "", 'data-live-search' => "true", 'title' => "Ustensiles"],
            ])
            ->add('idastuce', EntityType::class, [
                'label' => "Astuce",
                'class' => Astuce::class,
                'multiple' => true,
                'choice_label' => "astuce",
                'attr' => ['class' => "selectpicker","multiple" => "", 'data-live-search' => "true", 'title' => "Astuces"],
            ])
            ->add('idtheme', EntityType::class, [
                'label' => "Thème",
                'class' => Theme::class,
                'multiple' => true,
                'choice_label' => "theme",
                'attr' => ['class' => "selectpicker","multiple" => "", 'data-live-search' => "true", 'title' => "Thèmes"],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
