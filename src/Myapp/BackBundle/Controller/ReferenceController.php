<?php

namespace Myapp\BackBundle\Controller;

use Myapp\BackBundle\Entity\Reference;
use Myapp\BackBundle\Form\ReferenceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Reference controller.
 *
 */
class ReferenceController extends Controller
{
    /**
     * Lists all reference entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $references = $em->getRepository('BackBundle:Reference')->findAll();
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $references,
                
        $request->query->get('page', 1)/*page number*/,
        5/*limit per page*/
    );
        

        return $this->render('reference/index.html.twig', array(
            'references' => $references,'references' => $pagination
        ));
    }

      public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $references = $em->getRepository('BackBundle:Reference')->findAll();

        return $this->render('reference/modifier.html.twig', array(
                    'references' => $references,
        ));
    } 
    
    
    /**
     * Creates a new reference entity.
     *
     */
    public function newAction(Request $request)
    {
        $reference = new Reference();
        $form = $this->createForm('Myapp\BackBundle\Form\ReferenceType', $reference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reference->upload();
            $em->persist($reference);
            $em->flush();

            return $this->redirectToRoute('admin Reference_show', array('id' => $reference->getId()));
        }

        return $this->render('reference/new.html.twig', array(
            'reference' => $reference,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reference entity.
     *
     */
    public function showAction(Reference $reference)
    {
        $deleteForm = $this->createDeleteForm($reference);

        return $this->render('reference/show.html.twig', array(
            'reference' => $reference,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reference entity.
     *
     */
    public function editAction(Request $request, Reference $reference)
    {
        $deleteForm = $this->createDeleteForm($reference);
        $editForm = $this->createForm('Myapp\BackBundle\Form\ReferenceType', $reference);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em =  $this->getDoctrine()->getManager();
             $reference->upload();
        
        $em->persist($reference);
         
        $em->flush();

            return $this->redirectToRoute('admin Reference_edit', array('id' => $reference->getId()));
        }

        return $this->render('reference/edit.html.twig', array(
            'reference' => $reference,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reference entity.
     *
     */


  
        public function deleteAction($id)
    {
        
        $cox = $this->getDoctrine()->getManager();
        $reference = $cox->getRepository("BackBundle:Reference")->findOneById($id);
        
        if (!$reference) {
        throw $this->createNotFoundException('No reference found for id '.$id);
    }
        
        
        $cox->remove($reference);
        $cox->flush();
        return $this->redirect($this->generateUrl("admin Reference_new"));
        
     
    }
    
    
    /**
     * Creates a form to delete a reference entity.
     *
     * @param Reference $reference The reference entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reference $reference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin Reference_delete', array('id' => $reference->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
        public function rechercheAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $references = $em->getRepository("BackBundle:Reference")->findAll(); // afficher tous les modeles
        if ($request->isMethod('POST'))
            ; {
            $titre = $request->get('titre');
            $references = $em->getRepository("BackBundle:Reference")->findReferencesBytitre($titre); // afficher par titre
        }
        return $this->render('BackBundle:Default:rechercheReference.html.twig', array(
                    'references' => $references,
        ));
    }
}

