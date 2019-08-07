<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageHotel;
use WebsiteBundle\Form\ImageHotelType;

/**
 * ImageHotel controller.
 *
 * @Route("/imagehotel")
 */
class ImageHotelController extends Controller
{
    /**
     * Lists all ImageHotel entities.
     *
     * @Route("/", name="imagehotel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageHotels = $em->getRepository('WebsiteBundle:ImageHotel')->findAll();

        return $this->render('imagehotel/index.html.twig', array(
            'imageHotels' => $imageHotels,
        ));
    }

    /**
     * Creates a new ImageHotel entity.
     *
     * @Route("/new", name="imagehotel_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageHotel = new ImageHotel();
        $form = $this->createForm('WebsiteBundle\Form\ImageHotelType', $imageHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageHotel);
            $em->flush();
            $this->addFlash('flashSuccess', ' Add Image Hotel succes' );
            return $this->redirectToRoute('imagehotel_index');
        }

        return $this->render('imagehotel/new.html.twig', array(
            'imageHotel' => $imageHotel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageHotel entity.
     *
     * @Route("/{id}", name="imagehotel_show")
     * @Method("GET")
     */
    public function showAction(ImageHotel $imageHotel)
    {
        $deleteForm = $this->createDeleteForm($imageHotel);

        return $this->render('imagehotel/show.html.twig', array(
            'imageHotel' => $imageHotel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageHotel entity.
     *
     * @Route("/{id}/edit", name="imagehotel_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageHotel $imageHotel)
    {
        $deleteForm = $this->createDeleteForm($imageHotel);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageHotelType', $imageHotel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageHotel);
            $em->flush();
            $this->addFlash('flashSuccess', ' Edit Image Hotel succes' );
            return $this->redirectToRoute('imagehotel_index');
        }

        return $this->render('imagehotel/edit.html.twig', array(
            'imageHotel' => $imageHotel,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageHotel entity.
     *
     * @Route("/{id}/delete", name="imagehotel_delete")
     */
    public function deleteAction(ImageHotel $imageHotel)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($imageHotel);
            $em->flush();
        $this->addFlash('flashSuccess', ' Delete Image Hotel succes' );
        return $this->redirectToRoute('imagehotel_index');

    }

    /**
     * Creates a form to delete a ImageHotel entity.
     *
     * @param ImageHotel $imageHotel The ImageHotel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageHotel $imageHotel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagehotel_delete', array('id' => $imageHotel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
