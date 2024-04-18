<?php

namespace App\Controller;

use App\Entity\FormContact;
use App\Form\FormContactType;
use App\Repository\ContactPageRepository;
use App\Repository\FormContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactPageController extends AbstractController
{
    #[Route('/contactPage', name: 'app_contact_page')]
    public function index(ContactPageRepository $contactPageRepository, Request $request, FormContactRepository $formContactRepository): Response
    {
        $formContact = new FormContact();
        $form = $this->createForm(FormContactType::class, $formContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formContactRepository->save($formContact, true);
            $this->addFlash('form-contact-send-with-success-message', 'Formulaire de contact envoyé avec succès !');
            return $this->redirectToRoute('app_home_page', [], Response::HTTP_SEE_OTHER);
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error-message', 'Une erreur est survenue lors de l\'envoi du formulaire de contact. Veuillez réessayer.');
        }

        return $this->render('contact_page/index.html.twig', [
            'contactPages' => $contactPageRepository->findAll(),
            'formContact' => $formContact,
            'form' => $form->createView(),
        ]);
    }
}
