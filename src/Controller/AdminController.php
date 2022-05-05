<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin/article', name: 'admin_article')]
    public function createArticle(Request $request, ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();

        $article = new Article;

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($article);
            $entityManager->flush();
        }

        return $this->render('admin/article.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
