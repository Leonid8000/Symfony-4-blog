<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Entity\Post;

use App\Form\PostFormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('admin/post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
    /**
     * @Route("/admin/post/create", name="create/post")
     */
    public function create(Request $request)
    {
        $postForm = $this->createForm(PostFormType::class);

        $postForm->handleRequest($request);
        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($postForm->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Post created!');

            return $this->redirectToRoute('posts');
        }
        return $this->render('admin/post/create.html.twig', [
            'postForm' => $postForm->createView(),
        ]);
    }
    /**
     * @Route("/admin/post/delete/{id}", name="post/delete")
     * Method({"DELETE"})
     */
    public function delete(Request $request, $id){
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($post);
        $entityManager->flush();
        $response = new Response();
        $response->send();
    }
    /**
     * @Route("/admin/post/edit/{id}", name="admin/post/edit")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id){

        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('slug', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('content', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('save', SubmitType::class, array(
                'label' => 'Update',
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('posts');
        }
        return $this->render('admin/post/edit.html.twig', [
            'editForm' => $form->createView()
        ]);
    }

}
