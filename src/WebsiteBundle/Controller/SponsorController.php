<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\Sponsor;
use WebsiteBundle\Form\SponsorType;

/**
 * Sponsor controller.
 *
 * @Route("/sponsor")
 */
class SponsorController extends Controller
{
    /**
     * Lists all Sponsor entities.
     *
     * @Route("/", name="sponsor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sponsors = $em->getRepository('WebsiteBundle:Sponsor')->findAll();

        return $this->render('sponsor/index.html.twig', array(
            'sponsors' => $sponsors,
        ));
    }

    /**
     * Creates a new Sponsor entity.
     *
     * @Route("/new", name="sponsor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sponsor = new Sponsor();
        $form = $this->createForm('WebsiteBundle\Form\SponsorType', $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirectToRoute('sponsor_show', array('id' => $sponsor->getId()));
        }

        return $this->render('sponsor/new.html.twig', array(
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sponsor entity.
     *
     * @Route("/{id}", name="sponsor_show")
     * @Method("GET")
     */
    public function showAction(Sponsor $sponsor)
    {
        $deleteForm = $this->createDeleteForm($sponsor);

        return $this->render('sponsor/show.html.twig', array(
            'sponsor' => $sponsor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sponsor entity.
     *
     * @Route("/{id}/edit", name="sponsor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sponsor $sponsor)
    {
        $deleteForm = $this->createDeleteForm($sponsor);
        $editForm = $this->createForm('WebsiteBundle\Form\SponsorType', $sponsor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirectToRoute('sponsor_edit', array('id' => $sponsor->getId()));
        }

        return $this->render('sponsor/edit.html.twig', array(
            'sponsor' => $sponsor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sponsor entity.
     *
     * @Route("/{id}", name="sponsor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sponsor $sponsor)
    {
        $form = $this->createDeleteForm($sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sponsor);
            $em->flush();
        }

        return $this->redirectToRoute('sponsor_index');
    }

    /**
     * Creates a form to delete a Sponsor entity.
     *
     * @param Sponsor $sponsor The Sponsor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sponsor $sponsor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sponsor_delete', array('id' => $sponsor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
