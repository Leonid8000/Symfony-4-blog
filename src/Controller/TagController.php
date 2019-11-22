<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Tag;

use App\Form\TagType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TagController extends AbstractController
{
    /**
     * @Route("admin/tag/index", name="tags")
     */
    public function index()
    {
        $tags = $this->getDoctrine()->getRepository(Tag::class)->findAll();

        return $this->render('admin/tag/index.html.twig', [
            'tags' => $tags,
        ]);
    }
    /**
     * @Route("admin/tag/create", name="tag/create")
     */
    public function create(Request $request)
    {
        $tagForm = $this->createForm(TagType::class);

        $tagForm->handleRequest($request);
        if ($tagForm->isSubmitted() && $tagForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tagForm->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Tag created!');

            return $this->redirectToRoute('tags');
        }
        return $this->render('admin/tag/create.html.twig', [
            'tagForm' => $tagForm->createView(),
        ]);
    }
    /**
     * @Route("/admin/tag/delete/{id}", name="tag/delete")
     * Method({"DELETE"})
     */
    public function delete(Request $request, $id){
        $tag = $this->getDoctrine()->getRepository(Tag::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tag);
        $entityManager->flush();
        $response = new Response();
        $response->send();
    }
    /**
     * @Route("/admin/tag/edit/{id}", name="tag/edit")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id){

        $tag = $this->getDoctrine()->getRepository(Tag::class)->find($id);

        $form = $this->createFormBuilder($tag)
            ->add('tag', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('slug', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('save', SubmitType::class, array(
                'label' => 'Update',
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('tags');
        }
        return $this->render('admin/tag/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
