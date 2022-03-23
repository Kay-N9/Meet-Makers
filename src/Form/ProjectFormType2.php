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
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProjectFormType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('budget',NumberType::class,
            [
                'required'=> true,
            ],)
            ->add('uploadProject', FileType::class, [
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
                    'expanded'      => true, 
                    'multiple'      => true,
                    'required'      => true,
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
