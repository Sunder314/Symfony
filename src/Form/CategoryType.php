<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\File;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('image', FileType::class,[
                'required' => false,
                'mapped' => false,
                'label' => 'Image Category',
                'attr' => [
                    'placeholder' => 'Placeholder Image Category'

                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png'
                            ],
                        'mimeTypesMessage' => 'Merci de saisir un fichier valide (jpeg ou png)',
                        'uploadFormSizeErrorMessage' => 'la taille du fichier doit être en dessous de 2024k'
                    ])
                ]



            ])
            ->add('date_add', DateTimeType::class, [
                'data' => new \DateTime(),
                'widget' => 'single_text'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
