<?php

namespace Myapp\BackBundle\Controller;

use Myapp\BackBundle\Entity\Electricite;
use Myapp\BackBundle\Form\ElectriciteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Electricite controller.
 *
 */
class ElectriciteController extends Controller
{
    /**
     * Lists all electricite entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $electricites = $em->getRepository('BackBundle:Electricite')->findAll();
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $electricites, $request->query->get('page', 1)/* page number */, 5/* limit per page */
        );

        return $this->render('electricite/index.html.twig', array(
            'electricites' => $electricites, 'electricites' => $pagination
        ));
    }
    
    
     public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $electricites = $em->getRepository('BackBundle:Electricite')->findAll();

        return $this->render('electricite/modifier.html.twig', array(
                    'electricites' => $electricites,
        ));
    }
    

    /**
     * Creates a new electricite entity.
     *
     */
    public function newAction(Request $request)
    {
        $electricite = new Electricite();
        $form = $this->createForm('Myapp\BackBundle\Form\ElectriciteType', $electricite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $electricite->upload();
            
            $em->persist($electricite);
            $em->flush();

            return $this->redirectToRoute('adminElectricite_show', array('id' => $electricite->getId()));
        }

        return $this->render('electricite/new.html.twig', array(
            'electricite' => $electricite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a electricite entity.
     *
     */
    public function showAction(Electricite $electricite)
    {
        $deleteForm = $this->createDeleteForm($electricite);

        return $this->render('electricite/show.html.twig', array(
            'electricite' => $electricite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing electricite entity.
     *
     */
    public function editAction(Request $request, Electricite $electricite)
    {
        $deleteForm = $this->createDeleteForm($electricite);
        $editForm = $this->createForm('Myapp\BackBundle\Form\ElectriciteType', $electricite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
           
            
            $electricite->upload();
             
            $em->persist($electricite);
            
           $em->flush();

            return $this->redirectToRoute('adminElectricite_edit', array('id' => $electricite->getId()));
        }

        return $this->render('electricite/edit.html.twig', array(
            'electricite' => $electricite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a electricite entity.
     *
     */
 
    
      public function deleteAction($id) {

        $cox = $this->getDoctrine()->getManager();
        $electricite = $cox->getRepository("BackBundle:Electricite")->findOneById($id);

        if (!$electricite) {
            throw $this->createNotFoundException('No electricite found for id ' . $id);
        }


        $cox->remove($electricite);
        $cox->flush();
        return $this->redirect($this->generateUrl("adminElectricite_new"));
    }
    

    /**
     * Creates a form to delete a electricite entity.
     *
     * @param Electricite $electricite The electricite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Electricite $electricite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminElectricite_delete', array('id' => $electricite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
       public function rechercheAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $electricites = $em->getRepository("BackBundle:Electricite")->findAll(); // afficher tous les modeles
        if ($request->isMethod('POST'))
            ; {
            $titre = $request->get('titre');
            $electricites = $em->getRepository("BackBundle:Electricite")->findElectricitesBytitre($titre); // afficher par titre
        }
        return $this->render('BackBundle:Default:rechercheElectricite.html.twig', array(
                    'electricites' => $electricites,
        ));
    }
    
}
