<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/event', name: 'event_')]
class EventController extends AbstractController
{
    #[Route('', name: 'list')]
    public function eventList(): Response
    {
        return $this->render('event/list.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/{id}', name: 'get', requirements: ['id' => '\d+'])]
    public function getEvent($id): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(): Response
    {
        return $this->render('event/create.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}

