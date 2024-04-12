<?php

namespace App\Form;

use App\Entity\FormContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-contact__row--label'
                ],
                'attr' => [
                    'class' => 'form-contact__row--input'
                ]
            ])
            ->add('subject', TextType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'label' => 'Sujet',
                'label_attr' => [
                    'class' => 'form-contact__row--label'
                ],
                'attr' => [
                    'class' => 'form-contact__row--input'
                ],
            ])
            ->add('message', TextareaType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'label' => 'Message',
                'label_attr' => [
                    'class' => 'form-contact__row--label'
                ],
                'attr' => [
                    'class' => 'form-contact__row--message-input'
                ]
            ])
            ->add('email', EmailType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'label' => 'Email',
                'label_attr' => [
                    'class' => 'form-contact__row--label'
                ],
                'attr' => [
                    'class' => 'form-contact__row--input'
                ]
            ])
            ->add('phoneNumber', TextType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'label' => 'Numéro de téléphone',
                'label_attr' => [
                    'class' => 'form-contact__row--label'
                ],
                'attr' => [
                    'class' => 'form-contact__row--input'
                ]
            ])
            ->add('Envoyer', SubmitType::class, [
                'row_attr' => [
                    'class' => 'form-contact__row'
                ],
                'attr' => [
                    'class' => 'form-contact__button js-submit-button-form-contact',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FormContact::class,
        ]);
    }
}
