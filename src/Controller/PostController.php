<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Entity\Post;

use App\Form\PostFormType;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class PostController extends AbstractController
{
    /**
     * @Route("/admin/posts", name="posts")
     */
    public function index()
    {
        return $this->render('admin/post/index.html.twig', [
            
        ]);
    }
    /**
     * @Route("/admin/post/create", name="create/post")
     */
    public function create(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(PostFormType::class);

        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            dd($post);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/post/create.html.twig', [
            'form' => $form->createView()
        ]);
        
//        $form = $this->createForm(PostFormType::class);
//
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {

//            dd($request->request);

//            $data = $form->getData();
//            $post = new Post();
//            $post->setTitle('title');
//            $post->setContent('content');
//            $post->setSlug('slug');
//
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($post);
//            $entityManager->flush();
//            $this->addFlash('success', 'Post created!');
//
//            return $this->redirectToRoute('admin');
//        }
//        return $this->render('admin/post/create.html.twig', [
//            'form' => $form->createView(),
//        ]);
    }
}
//$form = $this->createFormBuilder($post)
//    ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
//    ->add('body', TextareaType::class, array('required' => false,
//        'attr' => array('class' => 'form-control')))
//    ->add('save', SubmitType::class, array(
//        'label' => 'Create',
//        'attr' => array('class' => 'btn btn-primary mt-3')
//    ))
//    ->getForm();