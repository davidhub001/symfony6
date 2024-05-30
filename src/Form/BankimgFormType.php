<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class BankimgFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('titre', TextType::class, [
            //     'label' => 'Titre',
            //     'attr' => ['class' => 'form-control'],
            // ])
            // ->add('description', TextareaType::class, [
            //     'label' => 'Description',
            //     'attr' => ['class' => 'form-control'],
            // ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            // ->add('category', ChoiceType::class, [
            //     'label' => 'Category',
            //     'choices'  => [
            //         'Category 1' => 'category1',
            //         'Category 2' => 'category2',
            //         'Category 3' => 'category3',
            //     ],
            //     'expanded' => true, // To render as radio buttons
            //     'multiple' => false,
            //     'attr' => ['class' => 'form-check-input'],
            // ])
            ->add('save', SubmitType::class, [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}