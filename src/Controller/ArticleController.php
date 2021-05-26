<?php


namespace App\Controller;


use App\Entity\Vegetables;
use App\Form\VegetablesFormType;
use App\Repository\VegetablesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/new')]
    public function newArticle(EntityManagerInterface $entityManager, Request $request)
    {
        $form = $this->createForm(VegetablesFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        /** @var Vegetables $vegetable */
            $vegetable = $form->getData();

            $entityManager->persist($vegetable);
            $entityManager->flush();

            $this->addFlash('success', $vegetable->getName(). " has been created");

            return $this->redirect('/all');
        }

        return $this->render('new.html.twig',[
            'vegetableFrom' => $form->createView()
        ]);
    }

    #[Route('/all')]
    public function list(VegetablesRepository $repository)
    {
        $vegetables = $repository->findAll();

        return $this->render('list.html.twig',[
            'vegetables' => $vegetables
        ]);
    }

}