<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Post;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        
        return $this->render('main/index.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }
    /**
     * @Route("main/showPost/{id}", name="post/show")
     */
    public function show($id)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('main/showPost.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
