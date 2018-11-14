<?php

namespace Myapp\BackBundle\Controller;

use Myapp\BackBundle\Entity\Batiment;
use Myapp\BackBundle\Form\BatimentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Batiment controller.
 *
 */
class BatimentController extends Controller
{
    /**
     * Lists all batiment entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $batiments = $em->getRepository('BackBundle:Batiment')->findAll();
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $batiments, $request->query->get('page', 1)/* page number */, 5/* limit per page */
        ); 
        

        return $this->render('batiment/index.html.twig', array(
            'batiments' => $batiments,'batiments' => $pagination
        ));
    }

    /**
     * Creates a new batiment entity.
     *
     */
    public function newAction(Request $request)
    {
        $batiment = new Batiment();
        $form = $this->createForm('Myapp\BackBundle\Form\BatimentType', $batiment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $batiment->upload();
            
            
            $em->persist($batiment);
            $em->flush();

            return $this->redirectToRoute('adminBatiment_show', array('id' => $batiment->getId()));
        }

        return $this->render('batiment/new.html.twig', array(
            'batiment' => $batiment,
            'form' => $form->createView(),
        ));
    }
    
    public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $batiments = $em->getRepository('BackBundle:Batiment')->findAll();

        return $this->render('batiment/modifier.html.twig', array(
                    'batiments' => $batiments,
        ));
    } 
    
    

    /**
     * Finds and displays a batiment entity.
     *
     */
    public function showAction(Batiment $batiment)
    {
        $deleteForm = $this->createDeleteForm($batiment);

        return $this->render('batiment/show.html.twig', array(
            'batiment' => $batiment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing batiment entity.
     *
     */
    public function editAction(Request $request, Batiment $batiment)
    {
        $deleteForm = $this->createDeleteForm($batiment);
        $editForm = $this->createForm('Myapp\BackBundle\Form\BatimentType', $batiment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
             $em = $this->getDoctrine()->getManager();
             
            $batiment->upload();

            $em->persist($batiment);

            $em->flush();

            return $this->redirectToRoute('adminBatiment_edit', array('id' => $batiment->getId()));
        }

        return $this->render('batiment/edit.html.twig', array(
            'batiment' => $batiment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a batiment entity.
     *
     */


      public function deleteAction($id) {

        $cox = $this->getDoctrine()->getManager();
        $batiment = $cox->getRepository("BackBundle:Batiment")->findOneById($id);

        if (!$batiment) {
            throw $this->createNotFoundException('No batiment found for id ' . $id);
        }


        $cox->remove($batiment);
        $cox->flush();
        return $this->redirect($this->generateUrl("adminBatiment_new"));
    }
    
    
    /**
     * Creates a form to delete a batiment entity.
     *
     * @param Batiment $batiment The batiment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Batiment $batiment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminBatiment_delete', array('id' => $batiment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    public function rechercheAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $batiments = $em->getRepository("BackBundle:Batiment")->findAll(); // afficher tous les modeles
        if ($request->isMethod('POST'))
            ; {
            $titre = $request->get('titre');
            $articles = $em->getRepository("BackBundle:Batiment")->findBatimentsBytitre($titre); // afficher par titre
        }
        return $this->render('BackBundle:Default:rechercheBatiment.html.twig', array(
                    'batiments' => $batiments,
        ));
    }
    
}
