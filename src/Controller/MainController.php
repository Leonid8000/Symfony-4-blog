<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Component\Pager\PaginatorInterface;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\Tag;
use App\Entity\Coment;
use App\Entity\User;

use App\Repository\ComentRepository;



class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $allPosts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        $posts = $paginator->paginate($allPosts,$request->query->getInt('page', 1),6);

        $first = $this->getDoctrine()->getRepository(Post::class)->findOneBy([]);
//        $second = $this->getDoctrine()->getRepository(Post::class)->findOneBy(['id'=>'9']);
        $second = $this->getDoctrine()->getRepository(Post::class)->find(9);
        $third = $this->getDoctrine()->getRepository(Post::class)->find(10);
//        $third = $this->getDoctrine()->getRepository(Post::class)->findOneBy([]);
//        $fourth = $this->getDoctrine()->getRepository(Post::class)->findOneBy([]);

        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        
        return $this->render('main/index.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
            'first' => $first,
            'second' => $second,
            'third' => $third,
        ]);
    }
    /**
     * @Route("main/showPost/{slug}", name="post/show",)
     */
    public function show($slug, ComentRepository $comentRepository, Request $request)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        $post = $this->getDoctrine()->getRepository(Post::class)->findOneBy(['slug' => $slug]);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        $coments = $comentRepository->findBy(['post' => $post]);
//        $postId = $this->getDoctrine()->getRepository->findBy(['post' => $post]);

        $author = $this->getUser();
        if($author){
            $aut = $author->getFirstName();
        }

        if ($request->isMethod('POST')) {
            $coment = new Coment();
            $coment->setAuthor($aut);
            $coment->setComent($request->request->get('coment'));
            $coment->setPost($post);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($coment);
                $entityManager->flush();
        }

        return $this->render('main/showPost.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
            'post' => $post,
            'coments' => $coments,
            'author' => $author
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

    /**
     * @Route("greenshock", name="greenshock",)
     */
    public function greenShockPage(){

        return $this->render('greenshock.html.twig', [

        ]);
    }
}
