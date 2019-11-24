<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use App\Entity\Post;
use App\Entity\Category;
use App\Entity\Tag;

class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('description')
            ->add('content')
            ->add('category',EntityType::class,[
                'class' => Category::class,
                'choice_label' => 'category',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('tag',EntityType::class,[
                'class' => Tag::class,
                'choice_label' => 'tag',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('img', FileType::class,[
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    ]
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Post::class
        ]);
    }
}
