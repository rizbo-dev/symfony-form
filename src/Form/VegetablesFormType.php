<?php


namespace App\Form;


use App\Entity\Vegetables;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VegetablesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'help' => 'Insert your name'
            ])
            ->add('price',MoneyType::class,[
                'help' => 'Insert price of vegetable'
            ] )
            ->add('image', TextType::class,[
                'help' => 'Image'
            ])
            ->add('description', TextareaType::class,[
                'help' => 'Insert desc. OPTIONAL',
            ])
            ->add('createdAt',null , [
                'widget' => 'single_text'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Vegetables::class
        ]);
    }

}