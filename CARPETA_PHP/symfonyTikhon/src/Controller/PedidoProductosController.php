<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PedidoProductosController extends AbstractController
{
    /**
     * @Route("/pedido/productos", name="app_pedido_productos")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PedidoProductosController.php',
        ]);
    }
}
