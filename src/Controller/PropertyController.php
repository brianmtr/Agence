<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PropertyController
{
    /** 
     * @var Environment 
    **/
    private $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new Response($this->twig->render('pages/property.html.twig', [
            'current_menu' => 'property'
        ]));
    }
}