<?php
/**
 * Created by PhpStorm.
 * User: jiyou
 * Date: 03/03/2018
 * Time: 20:16
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('last_name', TextType::class, array('label' => false))
            ->add('first_name', TextType::class, array('label' => false))
            ->add('email', EmailType::class, array('label' => false))
            ->add('subject', TextType::class, array('label' => false))
            ->add('message', TextareaType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => 'Envoyer'));
    }
}