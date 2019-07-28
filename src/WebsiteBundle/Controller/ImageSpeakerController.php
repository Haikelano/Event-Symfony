<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageSpeaker;
use WebsiteBundle\Form\ImageSpeakerType;

/**
 * ImageSpeaker controller.
 *
 * @Route("/imagespeaker")
 */
class ImageSpeakerController extends Controller
{
    /**
     * Lists all ImageSpeaker entities.
     *
     * @Route("/", name="imagespeaker_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageSpeakers = $em->getRepository('WebsiteBundle:ImageSpeaker')->findAll();

        return $this->render('imagespeaker/index.html.twig', array(
            'imageSpeakers' => $imageSpeakers,
        ));
    }

    /**
     * Creates a new ImageSpeaker entity.
     *
     * @Route("/new", name="imagespeaker_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageSpeaker = new ImageSpeaker();
        $form = $this->createForm('WebsiteBundle\Form\ImageSpeakerType', $imageSpeaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageSpeaker);
            $em->flush();

            return $this->redirectToRoute('imagespeaker_show', array('id' => $imageSpeaker->getId()));
        }

        return $this->render('imagespeaker/new.html.twig', array(
            'imageSpeaker' => $imageSpeaker,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageSpeaker entity.
     *
     * @Route("/{id}", name="imagespeaker_show")
     * @Method("GET")
     */
    public function showAction(ImageSpeaker $imageSpeaker)
    {
        $deleteForm = $this->createDeleteForm($imageSpeaker);

        return $this->render('imagespeaker/show.html.twig', array(
            'imageSpeaker' => $imageSpeaker,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageSpeaker entity.
     *
     * @Route("/{id}/edit", name="imagespeaker_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageSpeaker $imageSpeaker)
    {
        $deleteForm = $this->createDeleteForm($imageSpeaker);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageSpeakerType', $imageSpeaker);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageSpeaker);
            $em->flush();

            return $this->redirectToRoute('imagespeaker_edit', array('id' => $imageSpeaker->getId()));
        }

        return $this->render('imagespeaker/edit.html.twig', array(
            'imageSpeaker' => $imageSpeaker,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageSpeaker entity.
     *
     * @Route("/{id}", name="imagespeaker_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImageSpeaker $imageSpeaker)
    {
        $form = $this->createDeleteForm($imageSpeaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageSpeaker);
            $em->flush();
        }

        return $this->redirectToRoute('imagespeaker_index');
    }

    /**
     * Creates a form to delete a ImageSpeaker entity.
     *
     * @param ImageSpeaker $imageSpeaker The ImageSpeaker entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageSpeaker $imageSpeaker)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagespeaker_delete', array('id' => $imageSpeaker->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
