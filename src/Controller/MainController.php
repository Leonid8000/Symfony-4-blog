<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\Tag;

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
     * @Route("main/showPost/{slug}", name="post/show",)
     */
    public function show($slug)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
//        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
//        $post = $this->getDoctrine()->getRepository(Post::class)->findBy([$id => $this->getId()]);
//        $slug = $this->getDoctrine()->getRepository(Post::class)->find($slug);
        $post = $this->getDoctrine()->getRepository(Post::class)->findOneBy(['slug' => $slug]);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('main/showPost.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * @Route("main/show-category/{slug}", name="category/show",)
     */
    public function showCategoryPosts($slug){

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $category = $this->getDoctrine()->getRepository(Category::class)->findOneBy(['slug' => $slug]);

        return $this->render('main/show-category.html.twig', [
            'posts' => $posts,
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("main/show-tag/{slug}", name="tag/show",)
     */
    public function showTagPosts($slug){

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        $tags = $this->getDoctrine()->getRepository(Tag::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $tag = $this->getDoctrine()->getRepository(Tag::class)->findOneBy(['slug' => $slug]);

        return $this->render('main/show-tag.html.twig', [
            'posts' => $posts,
            'tag' => $tag,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }
}
