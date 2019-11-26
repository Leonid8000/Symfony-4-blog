<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Form\CategoryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Category;
use App\Entity\Post;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("admin/category", name="category")
     */
    public function index()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * @Route("admin/category/create", name="category/create")
     */
    public function create(Request $request)
    {
        $categoryForm = $this->createForm(CategoryType::class);

        $categoryForm->handleRequest($request);
        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryForm->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Category created!');

            return $this->redirectToRoute('category');
        }
        return $this->render('admin/category/create.html.twig', [
            'categoryForm' => $categoryForm->createView(),
        ]);
    }
    /**
     * @Route("/admin/category/delete/{id}", name="category/delete")
     * Method({"DELETE"})
     */
    public function delete(Request $request, $id){
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($category);
        $entityManager->flush();
        $response = new Response();
        $response->send();
    }
    /**
     * @Route("/admin/category/edit/{id}", name="category/edit")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id){

        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        
        $form = $this->createFormBuilder($category)
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control')))
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
            return $this->redirectToRoute('category');
        }
        return $this->render('admin/category/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
