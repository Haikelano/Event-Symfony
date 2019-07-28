<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\EventGallery;
use WebsiteBundle\Form\EventGalleryType;

/**
 * EventGallery controller.
 *
 * @Route("/eventgallery")
 */
class EventGalleryController extends Controller
{
    /**
     * Lists all EventGallery entities.
     *
     * @Route("/", name="eventgallery_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eventGalleries = $em->getRepository('WebsiteBundle:EventGallery')->findAll();

        return $this->render('eventgallery/index.html.twig', array(
            'eventGalleries' => $eventGalleries,
        ));
    }

    /**
     * Creates a new EventGallery entity.
     *
     * @Route("/new", name="eventgallery_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $eventGallery = new EventGallery();
        $form = $this->createForm('WebsiteBundle\Form\EventGalleryType', $eventGallery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventGallery);
            $em->flush();

            return $this->redirectToRoute('eventgallery_show', array('id' => $eventGallery->getId()));
        }

        return $this->render('eventgallery/new.html.twig', array(
            'eventGallery' => $eventGallery,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EventGallery entity.
     *
     * @Route("/{id}", name="eventgallery_show")
     * @Method("GET")
     */
    public function showAction(EventGallery $eventGallery)
    {
        $deleteForm = $this->createDeleteForm($eventGallery);

        return $this->render('eventgallery/show.html.twig', array(
            'eventGallery' => $eventGallery,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EventGallery entity.
     *
     * @Route("/{id}/edit", name="eventgallery_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EventGallery $eventGallery)
    {
        $deleteForm = $this->createDeleteForm($eventGallery);
        $editForm = $this->createForm('WebsiteBundle\Form\EventGalleryType', $eventGallery);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventGallery);
            $em->flush();

            return $this->redirectToRoute('eventgallery_edit', array('id' => $eventGallery->getId()));
        }

        return $this->render('eventgallery/edit.html.twig', array(
            'eventGallery' => $eventGallery,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EventGallery entity.
     *
     * @Route("/{id}", name="eventgallery_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EventGallery $eventGallery)
    {
        $form = $this->createDeleteForm($eventGallery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($eventGallery);
            $em->flush();
        }

        return $this->redirectToRoute('eventgallery_index');
    }

    /**
     * Creates a form to delete a EventGallery entity.
     *
     * @param EventGallery $eventGallery The EventGallery entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EventGallery $eventGallery)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eventgallery_delete', array('id' => $eventGallery->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
