<?php

namespace WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WebsiteBundle\Entity\Actuality;
use WebsiteBundle\Form\ActualityType;

/**
 * Actuality controller.
 *
 * @Route("/actuality")
 */
class ActualityController extends Controller
{
    /**
     * Lists all Actuality entities.
     *
     * @Route("/", name="actuality_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actualities = $em->getRepository('WebsiteBundle:Actuality')->findAll();

        return $this->render('actuality/index.html.twig', array(
            'actualities' => $actualities,
        ));
    }
    /**
     * Lists 3 partner entities.
     *
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actualities = $em->getRepository('WebsiteBundle:Actuality')->findBy(array(),null,3,null);

        return $this->render('actuality/list.html.twig', array(
            'actualities' => $actualities,
        ));
    }

    /**
     * Creates a new Actuality entity.
     *
     * @Route("/new", name="actuality_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $actuality = new Actuality();
        $form = $this->createForm('WebsiteBundle\Form\ActualityType', $actuality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actuality);
            $em->flush();
            $this->addFlash('flashSuccess', ' Add Actuality succes' );
            return $this->redirectToRoute('actuality_index');
        }

        return $this->render('actuality/new.html.twig', array(
            'actuality' => $actuality,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Actuality entity.
     *
     * @Route("/{id}", name="actuality_show")
     * @Method("GET")
     */
    public function showAction(Actuality $actuality)
    {
        $deleteForm = $this->createDeleteForm($actuality);

        return $this->render('actuality/show.html.twig', array(
            'actuality' => $actuality,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Actuality entity.
     *
     * @Route("/{id}/edit", name="actuality_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Actuality $actuality)
    {
        $deleteForm = $this->createDeleteForm($actuality);
        $editForm = $this->createForm('WebsiteBundle\Form\ActualityType', $actuality);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actuality);
            $em->flush();
            $this->addFlash('flashSuccess', ' Edit Actuality succes' );
            return $this->redirectToRoute('actuality_index', array('id' => $actuality->getId()));
        }

        return $this->render('actuality/edit.html.twig', array(
            'actuality' => $actuality,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Actuality entity.
     *
     * @Route("/{id}/delete", name="actuality_delete")
     */
    public function deleteAction(Actuality $actuality)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($actuality);
        $em->flush();
        $this->addFlash('flashSuccess', ' Delete Actuality succes' );
        return $this->redirectToRoute('actuality_index', array('id' => $actuality->getId()));

    }

   /**
     * Creates a form to delete a Actuality entity.
     *
     * @param Actuality $actuality The Actuality entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actuality $actuality)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actuality_delete', array('id' => $actuality->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
