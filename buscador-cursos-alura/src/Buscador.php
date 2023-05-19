<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;
use Teste;

Teste::teste();

class Buscador
{
    private ClientInterface $httpClient;
    private Crawler $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->crawler = $crawler;
        $this->httpClient = $httpClient;
    }

    public function buscar(string $uri): array
    {
        $response = $this->httpClient->request(
            'GET',
            $uri,
            [
                'verify' => false //To not verify SSL certificate
            ]
        );

        $html = $response->getBody();

        $this->crawler->addHtmlContent($html);

        $coursesElement = $this->crawler->filter('span.card-curso__nome');

        $courses = [];

        foreach ($coursesElement as $courseElement) {
            $courses[] = $courseElement->textContent;
        }

        return $courses;
    }
}
