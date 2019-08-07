<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\Slide;
use WebsiteBundle\Form\SlideType;

/**
 * Slide controller.
 *
 * @Route("/slide")
 */
class SlideController extends Controller
{
    /**
     * Lists all Slide entities.
     *
     * @Route("/", name="slide_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $slides = $em->getRepository('WebsiteBundle:Slide')->findAll();

        return $this->render('slide/index.html.twig', array(
            'slides' => $slides,
        ));
    }

    /**
     * Creates a new Slide entity.
     *
     * @Route("/new", name="slide_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $slide = new Slide();
        $form = $this->createForm('WebsiteBundle\Form\SlideType', $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slide);
            $em->flush();
            $this->addFlash('flashSuccess', ' Add Slide Succes' );
            return $this->redirectToRoute('slide_index');
        }

        return $this->render('slide/new.html.twig', array(
            'slide' => $slide,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Slide entity.
     *
     * @Route("/{id}", name="slide_show")
     * @Method("GET")
     */
    public function showAction(Slide $slide)
    {
        $deleteForm = $this->createDeleteForm($slide);
        $em= $this->getDoctrine()->getManager();
        $imageevent =$em->getRepository('WebsiteBundle:EventGallery')->findOneBy(array('idEvent' => $slide->getIdEvent(),'iamgePrincipal'=>true));

        return $this->render('slide/show.html.twig', array(
            'imageevent'=>$imageevent,
            'slide' => $slide,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Slide entity.
     *
     * @Route("/{id}/edit", name="slide_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Slide $slide)
    {
        $deleteForm = $this->createDeleteForm($slide);
        $editForm = $this->createForm('WebsiteBundle\Form\SlideType', $slide);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slide);
            $em->flush();
            $this->addFlash('flashSuccess', ' Edit Question Succes' );
            return $this->redirectToRoute('slide_index');
        }

        return $this->render('slide/edit.html.twig', array(
            'slide' => $slide,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Slide entity.
     *
     * @Route("/{id}/delete", name="slide_delete")
     */
    public function deleteAction(Slide $slide)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();
        $this->addFlash('flashSuccess', ' Delete Slide Succes' );
        return $this->redirectToRoute('slide_index');
    }

    /**
     * Creates a form to delete a Slide entity.
     *
     * @param Slide $slide The Slide entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Slide $slide)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('slide_delete', array('id' => $slide->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
