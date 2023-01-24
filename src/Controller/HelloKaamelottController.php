<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HelloKaamelottController extends AbstractController
{
    #[Route('/', name: 'app_hello_kaamelott')]
    public function index(HttpClientInterface $client): Response
    {
        ;


        return $this->render('hello_kaamelott/index.html.twig', [
            'citations' => $client->request('GET', 'https://kaamelott.chaudie.re/api/random')->toArray(),
        ]);
    }
}
