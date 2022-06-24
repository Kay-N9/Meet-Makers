<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProjectFormType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('budget',RangeType::class,
            [
                'attr' => [

                'min' => 300,
                'max' => 2000,

                ],
                'required'=> true,
            ],)
            ->add('uploadProject', FileType::class, [
                'attr' => [
                    'class' => 'bouton-upload'],
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '120M',
                        // 'mimeTypes' => [
                        //     'application/octet-stream',
                        //     'audio/mpeg',
                        //     'audio/mp3'
                        // ]
                    ])
                ]
            ])
            ->add('uploadPicture', FileType::class, [
                'attr' => [
                    'class' => 'bouton-upload'],
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '120M',
                        // 'mimeTypes' => [
                        //     'image/jpeg',
                        //     'image/png',
                        //     'image/webp'
                        // ]
                    ])
                ],
                // 'attr' => [
                //     'accept'=>'.jpg, .jpeg, .png, .gif'
                // ]
            ])
            ->add('style', EntityType::class, 
                [
                    'class' => Category::class,
                    'choice_label'  =>'name',
                    'choice_attr' => function () { return array('class' => 'tag-style-hiphop'); },
                    'expanded'      => true, 
                    'multiple'      => true,
                    'required'      => true,
                    'label_attr' => ['class' => 'tag']
                ],
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
