<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\DetailPlanning;
use WebsiteBundle\Form\DetailPlanningType;

/**
 * DetailPlanning controller.
 *
 * @Route("/detailplanning")
 */
class DetailPlanningController extends Controller
{
    /**
     * Lists all DetailPlanning entities.
     *
     * @Route("/", name="detailplanning_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detailPlannings = $em->getRepository('WebsiteBundle:DetailPlanning')->findAll();

        return $this->render('detailplanning/index.html.twig', array(
            'detailPlannings' => $detailPlannings,
        ));
    }

    /**
     * Creates a new DetailPlanning entity.
     *
     * @Route("/new", name="detailplanning_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $detailPlanning = new DetailPlanning();
        $form = $this->createForm('WebsiteBundle\Form\DetailPlanningType', $detailPlanning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detailPlanning);
            $em->flush();

            return $this->redirectToRoute('detailplanning_show', array('id' => $detailPlanning->getId()));
        }

        return $this->render('detailplanning/new.html.twig', array(
            'detailPlanning' => $detailPlanning,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DetailPlanning entity.
     *
     * @Route("/{id}", name="detailplanning_show")
     * @Method("GET")
     */
    public function showAction(DetailPlanning $detailPlanning)
    {
        $deleteForm = $this->createDeleteForm($detailPlanning);

        return $this->render('detailplanning/show.html.twig', array(
            'detailPlanning' => $detailPlanning,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DetailPlanning entity.
     *
     * @Route("/{id}/edit", name="detailplanning_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DetailPlanning $detailPlanning)
    {
        $deleteForm = $this->createDeleteForm($detailPlanning);
        $editForm = $this->createForm('WebsiteBundle\Form\DetailPlanningType', $detailPlanning);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detailPlanning);
            $em->flush();

            return $this->redirectToRoute('detailplanning_edit', array('id' => $detailPlanning->getId()));
        }

        return $this->render('detailplanning/edit.html.twig', array(
            'detailPlanning' => $detailPlanning,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DetailPlanning entity.
     *
     * @Route("/{id}", name="detailplanning_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DetailPlanning $detailPlanning)
    {
        $form = $this->createDeleteForm($detailPlanning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detailPlanning);
            $em->flush();
        }

        return $this->redirectToRoute('detailplanning_index');
    }

    /**
     * Creates a form to delete a DetailPlanning entity.
     *
     * @param DetailPlanning $detailPlanning The DetailPlanning entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DetailPlanning $detailPlanning)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detailplanning_delete', array('id' => $detailPlanning->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
