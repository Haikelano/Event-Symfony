<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageSponsor;
use WebsiteBundle\Form\ImageSponsorType;

/**
 * ImageSponsor controller.
 *
 * @Route("/imagesponsor")
 */
class ImageSponsorController extends Controller
{
    /**
     * Lists all ImageSponsor entities.
     *
     * @Route("/", name="imagesponsor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageSponsors = $em->getRepository('WebsiteBundle:ImageSponsor')->findAll();

        return $this->render('imagesponsor/index.html.twig', array(
            'imageSponsors' => $imageSponsors,
        ));
    }

    /**
     * Creates a new ImageSponsor entity.
     *
     * @Route("/new", name="imagesponsor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageSponsor = new ImageSponsor();
        $form = $this->createForm('WebsiteBundle\Form\ImageSponsorType', $imageSponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageSponsor);
            $em->flush();
            $this->addFlash('flashSuccess', ' Add Image Sponsor succes' );
            return $this->redirectToRoute('imagesponsor_index');
        }

        return $this->render('imagesponsor/new.html.twig', array(
            'imageSponsor' => $imageSponsor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageSponsor entity.
     *
     * @Route("/{id}", name="imagesponsor_show")
     * @Method("GET")
     */
    public function showAction(ImageSponsor $imageSponsor)
    {
        $deleteForm = $this->createDeleteForm($imageSponsor);

        return $this->render('imagesponsor/show.html.twig', array(
            'imageSponsor' => $imageSponsor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageSponsor entity.
     *
     * @Route("/{id}/edit", name="imagesponsor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageSponsor $imageSponsor)
    {
        $deleteForm = $this->createDeleteForm($imageSponsor);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageSponsorType', $imageSponsor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageSponsor);
            $em->flush();
            $this->addFlash('flashSuccess', ' Edit Image Sponsor succes' );
            return $this->redirectToRoute('imagesponsor_index');
        }

        return $this->render('imagesponsor/edit.html.twig', array(
            'imageSponsor' => $imageSponsor,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageSponsor entity.
     *
     * @Route("/{id}/delete", name="imagesponsor_delete")
     */
    public function deleteAction( ImageSponsor $imageSponsor)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($imageSponsor);
            $em->flush();
        $this->addFlash('flashSuccess', ' Dlete Image Sponsor succes' );
        return $this->redirectToRoute('imagesponsor_index');

    }

    /**
     * Creates a form to delete a ImageSponsor entity.
     *
     * @param ImageSponsor $imageSponsor The ImageSponsor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageSponsor $imageSponsor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagesponsor_delete', array('id' => $imageSponsor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
