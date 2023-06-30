<?php

namespace App\Controller;

use App\Entity\Mark;
use App\Entity\Smartphone;
use App\Form\SmartphoneFilterType;
use App\Repository\MarkRepository;
use App\Repository\SmartphoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MarkRepository $markRepository): Response
    {
        $marks = $markRepository->findAll();
        return $this->render('home/index.html.twig', [
            'marks' => $marks,
        ]);
    }
    #[Route('/mark/{id}', name: 'app_mark')]
    public function showMark(Mark $mark, Request $request,SmartphoneRepository $smartphoneRepository): Response
{
    $form = $this->createForm(SmartphoneFilterType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $criteria = $form->getData(); 
        $smartphones = $smartphoneRepository->filter($criteria);
        return $this->render('home/smart.html.twig', [
            'smartphones' => $smartphones,
            'form' => $form->createView(),
        ]);
    }

    return $this->render('home/test.html.twig', [
        'mark' => $mark,
        'form' => $form->createView(),
    ]);
}
}


