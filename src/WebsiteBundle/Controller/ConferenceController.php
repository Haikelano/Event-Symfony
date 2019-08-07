<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\Conference;
use WebsiteBundle\Form\ConferenceType;

/**
 * Conference controller.
 *
 * @Route("/conference")
 */
class ConferenceController extends Controller
{
    /**
     * Lists all Conference entities.
     *
     * @Route("/", name="conference_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conferences = $em->getRepository('WebsiteBundle:Conference')->findAll();

        return $this->render('conference/index.html.twig', array(
            'conferences' => $conferences,
        ));
    }

    /**
     * Creates a new Conference entity.
     *
     * @Route("/new", name="conference_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $conference = new Conference();
        $form = $this->createForm('WebsiteBundle\Form\ConferenceType', $conference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conference);
            $em->flush();
            $this->addFlash('flashSuccess', ' Add Conference succes' );
            return $this->redirectToRoute('conference_index');
        }

        return $this->render('conference/new.html.twig', array(
            'conference' => $conference,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Conference entity.
     *
     * @Route("/{id}", name="conference_show")
     * @Method("GET")
     */
    public function showAction(Conference $conference)
    {
        $deleteForm = $this->createDeleteForm($conference);
        $em = $this->getDoctrine()->getManager();
        $imageevent =$em->getRepository('WebsiteBundle:EventGallery')->findOneBy(array('idEvent' => $conference->getIdEvent(),'iamgePrincipal'=>true));


        return $this->render('conference/show.html.twig', array(
            'imageevent'=>$imageevent,
            'conference' => $conference,
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Conference entity.
     *
     * @Route("/{id}/edit", name="conference_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conference $conference)
    {
        $deleteForm = $this->createDeleteForm($conference);
        $editForm = $this->createForm('WebsiteBundle\Form\ConferenceType', $conference);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conference);
            $em->flush();
            $this->addFlash('flashSuccess', ' Edit Conference Succes' );
            return $this->redirectToRoute('conference_index');
        }

        return $this->render('conference/edit.html.twig', array(
            'conference' => $conference,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conference entity.
     *
     * @Route("/{id}/delete", name="conference_delete")
     */
    public function deleteAction(Conference $conference)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($conference);
            $em->flush();
            $this->addFlash('flashSuccess', ' Delete Conference succes' );
            return $this->redirectToRoute('conference_index');


    }

    /**
     * Creates a form to delete a Conference entity.
     *
     * @param Conference $conference The Conference entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conference $conference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conference_delete', array('id' => $conference->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
