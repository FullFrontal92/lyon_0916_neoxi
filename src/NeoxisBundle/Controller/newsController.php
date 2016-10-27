<?php

namespace NeoxisBundle\Controller;

use NeoxisBundle\Entity\news;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * News controller.
 *
 */
class newsController extends Controller
{
    /**
     * Lists all news entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NeoxisBundle:news')->findAll();

        return $this->render('news/index.html.twig', array(
            'news' => $news,
        ));
    }

    /**
     * Creates a new news entity.
     *
     */
    public function newAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm('NeoxisBundle\Form\newsType', $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush($news);

            return $this->redirectToRoute('news_show', array('id' => $news->getId()));
        }

        return $this->render('news/new.html.twig', array(
            'news' => $news,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a news entity.
     *
     */
    public function showAction(news $news)
    {
        $deleteForm = $this->createDeleteForm($news);

        return $this->render('news/show.html.twig', array(
            'news' => $news,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing news entity.
     *
     */
    public function editAction(Request $request, news $news)
    {
        $deleteForm = $this->createDeleteForm($news);
        $editForm = $this->createForm('NeoxisBundle\Form\newsType', $news);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('news_edit', array('id' => $news->getId()));
        }

        return $this->render('news/edit.html.twig', array(
            'news' => $news,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a news entity.
     *
     */
    public function deleteAction(Request $request, news $news)
    {
        $form = $this->createDeleteForm($news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($news);
            $em->flush($news);
        }

        return $this->redirectToRoute('news_index');
    }

    /**
     * Creates a form to delete a news entity.
     *
     * @param news $news The news entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(news $news)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('news_delete', array('id' => $news->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    //my controlers for news form
    public function create_newsAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm('NeoxisBundle\Form\newsType', $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush($news);

            return $this->redirectToRoute('admin', array('id' => $news->getId()));
        }
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        return $this->render('security/nouvelle_actualite.html.twig', array(
            'news' => $news,
            'form' => $form->createView(),
            'now' => strftime("%A %d %B, %kh%M"),
        ));
    }

    public function edit_newsAction(Request $request, news $news)
    {
        $deleteForm = $this->createDelete_newsForm($news);
        $editForm = $this->createForm('NeoxisBundle\Form\newsType', $news);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('edit_news', array('id' => $news->getId()));
        }
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        return $this->render('security/modifier_actualite.html.twig', array(
            'news' => $news,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'now' => strftime("%A %d %B, %kh%M"),
        ));
    }

    private function createDelete_newsForm(news $news)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('delete_news', array('id' => $news->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function delete_newsAction(Request $request, news $news)
    {
        $form = $this->createDeleteForm($news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($news);
            $em->flush($news);
        }

        return $this->redirectToRoute('admin');
    }

}