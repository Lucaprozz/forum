<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasicController extends AbstractController
{
    /**
     * @Route("/basic", name="basic")
     */
    public function index()
    {
        return $this->render('basic/index.html.twig', [
            'controller_name' => 'BasicController',
        ]);
    }
}
