<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\ImageCountry;
use WebsiteBundle\Form\ImageCountryType;

/**
 * ImageCountry controller.
 *
 * @Route("/imagecountry")
 */
class ImageCountryController extends Controller
{
    /**
     * Lists all ImageCountry entities.
     *
     * @Route("/", name="imagecountry_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageCountries = $em->getRepository('WebsiteBundle:ImageCountry')->findAll();

        return $this->render('imagecountry/index.html.twig', array(
            'imageCountries' => $imageCountries,
        ));
    }

    /**
     * Creates a new ImageCountry entity.
     *
     * @Route("/new", name="imagecountry_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageCountry = new ImageCountry();
        $form = $this->createForm('WebsiteBundle\Form\ImageCountryType', $imageCountry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageCountry);
            $em->flush();

            return $this->redirectToRoute('imagecountry_show', array('id' => $imageCountry->getId()));
        }

        return $this->render('imagecountry/new.html.twig', array(
            'imageCountry' => $imageCountry,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageCountry entity.
     *
     * @Route("/{id}", name="imagecountry_show")
     * @Method("GET")
     */
    public function showAction(ImageCountry $imageCountry)
    {
        $deleteForm = $this->createDeleteForm($imageCountry);

        return $this->render('imagecountry/show.html.twig', array(
            'imageCountry' => $imageCountry,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImageCountry entity.
     *
     * @Route("/{id}/edit", name="imagecountry_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageCountry $imageCountry)
    {
        $deleteForm = $this->createDeleteForm($imageCountry);
        $editForm = $this->createForm('WebsiteBundle\Form\ImageCountryType', $imageCountry);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageCountry);
            $em->flush();

            return $this->redirectToRoute('imagecountry_edit', array('id' => $imageCountry->getId()));
        }

        return $this->render('imagecountry/edit.html.twig', array(
            'imageCountry' => $imageCountry,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImageCountry entity.
     *
     * @Route("/{id}", name="imagecountry_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImageCountry $imageCountry)
    {
        $form = $this->createDeleteForm($imageCountry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageCountry);
            $em->flush();
        }

        return $this->redirectToRoute('imagecountry_index');
    }

    /**
     * Creates a form to delete a ImageCountry entity.
     *
     * @param ImageCountry $imageCountry The ImageCountry entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageCountry $imageCountry)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagecountry_delete', array('id' => $imageCountry->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
