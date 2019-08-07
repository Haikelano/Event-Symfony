<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageTopics;
use WebsiteBundle\Form\ImageTopicsType;

/**
 * ImageTopics controller.
 *
 * @Route("/imagetopics")
 */
class ImageTopicsController extends Controller
{
    /**
     * Lists all ImageTopics entities.
     *
     * @Route("/", name="imagetopics_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageTopics = $em->getRepository('WebsiteBundle:ImageTopics')->findAll();

        return $this->render('imagetopics/index.html.twig', array(
            'imageTopics' => $imageTopics,
        ));
    }

    /**
     * Creates a new ImageTopics entity.
     *
     * @Route("/new", name="imagetopics_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageTopic = new ImageTopics();
        $form = $this->createForm('WebsiteBundle\Form\ImageTopicsType', $imageTopic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageTopic);
            $em->flush();

            return $this->redirectToRoute('imagetopics_show', array('id' => $imageTopic->getId()));
        }

        return $this->render('imagetopics/new.html.twig', array(
            'imageTopic' => $imageTopic,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageTopics entity.
     *
     * @Route("/{id}", name="imagetopics_show")
     * @Method("GET")
     */
    public function showAction(ImageTopics $imageTopic)
    {
        $deleteForm = $this->createDeleteForm($imageTopic);

        return $this->render('imagetopics/show.html.twig', array(
            'imageTopic' => $imageTopic,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageTopics entity.
     *
     * @Route("/{id}/edit", name="imagetopics_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageTopics $imageTopic)
    {
        $deleteForm = $this->createDeleteForm($imageTopic);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageTopicsType', $imageTopic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageTopic);
            $em->flush();

            return $this->redirectToRoute('imagetopics_edit', array('id' => $imageTopic->getId()));
        }

        return $this->render('imagetopics/edit.html.twig', array(
            'imageTopic' => $imageTopic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageTopics entity.
     *
     * @Route("/{id}", name="imagetopics_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImageTopics $imageTopic)
    {
        $form = $this->createDeleteForm($imageTopic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageTopic);
            $em->flush();
        }

        return $this->redirectToRoute('imagetopics_index');
    }

    /**
     * Creates a form to delete a ImageTopics entity.
     *
     * @param ImageTopics $imageTopic The ImageTopics entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageTopics $imageTopic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagetopics_delete', array('id' => $imageTopic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
