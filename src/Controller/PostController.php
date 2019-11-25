<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Entity\Post;
use App\Entity\Category;
use App\Entity\Tag;

use App\Form\PostFormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
        $upload = new Post();
        $postForm = $this->createForm(PostFormType::class, $upload);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        $postForm->handleRequest($request);
        if ($postForm->isSubmitted() && $postForm->isValid()) {

            $file = $postForm->get('img')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $upload->setImg($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($postForm->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Post created!');

            return $this->redirectToRoute('posts');
        }
        return $this->render('admin/post/create.html.twig', [
            'postForm' => $postForm->createView(),
            'categories' => $categories
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
        $upload = new Post();
        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('slug', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('content', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('description', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('category',EntityType::class,[
                'class' => Category::class,
                'choice_label' => 'category',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('tag',EntityType::class,[
                'class' => Tag::class,
                'choice_label' => 'tag',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('img', FileType::class,[
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                ]
            ])
            ->add('save', SubmitType::class, array(
                'label' => 'Update',
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('img')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $post->setImg($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();
            return $this->redirectToRoute('posts');
        }
        return $this->render('admin/post/edit.html.twig', [
            'editForm' => $form->createView()
        ]);
    }

}
