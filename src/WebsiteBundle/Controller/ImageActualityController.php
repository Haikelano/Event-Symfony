<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageActuality;
use WebsiteBundle\Form\ImageActualityType;

/**
 * ImageActuality controller.
 *
 * @Route("/imageactuality")
 */
class ImageActualityController extends Controller
{
    /**
     * Lists all ImageActuality entities.
     *
     * @Route("/", name="imageactuality_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageActualities = $em->getRepository('WebsiteBundle:ImageActuality')->findAll();

        return $this->render('imageactuality/index.html.twig', array(
            'imageActualities' => $imageActualities,
        ));
    }

    /**
     * Creates a new ImageActuality entity.
     *
     * @Route("/new", name="imageactuality_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageActuality = new ImageActuality();
        $form = $this->createForm('WebsiteBundle\Form\ImageActualityType', $imageActuality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageActuality);
            $em->flush();

            return $this->redirectToRoute('imageactuality_show', array('id' => $imageActuality->getId()));
        }

        return $this->render('imageactuality/new.html.twig', array(
            'imageActuality' => $imageActuality,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageActuality entity.
     *
     * @Route("/{id}", name="imageactuality_show")
     * @Method("GET")
     */
    public function showAction(ImageActuality $imageActuality)
    {
        $deleteForm = $this->createDeleteForm($imageActuality);

        return $this->render('imageactuality/show.html.twig', array(
            'imageActuality' => $imageActuality,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageActuality entity.
     *
     * @Route("/{id}/edit", name="imageactuality_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageActuality $imageActuality)
    {
        $deleteForm = $this->createDeleteForm($imageActuality);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageActualityType', $imageActuality);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageActuality);
            $em->flush();

            return $this->redirectToRoute('imageactuality_edit', array('id' => $imageActuality->getId()));
        }

        return $this->render('imageactuality/edit.html.twig', array(
            'imageActuality' => $imageActuality,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageActuality entity.
     *
     * @Route("/{id}", name="imageactuality_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImageActuality $imageActuality)
    {
        $form = $this->createDeleteForm($imageActuality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageActuality);
            $em->flush();
        }

        return $this->redirectToRoute('imageactuality_index');
    }

    /**
     * Creates a form to delete a ImageActuality entity.
     *
     * @param ImageActuality $imageActuality The ImageActuality entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageActuality $imageActuality)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imageactuality_delete', array('id' => $imageActuality->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
