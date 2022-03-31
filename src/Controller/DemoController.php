<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="app_demo")
     */
    public function index(Request $request): Response
    {
	$commentNew = $request->request->get('value');
        $message = "Updated comment: $commentNew";

        \PHPStan\dumpType($request);
        \PHPStan\dumpType($request->request);
        \PHPStan\dumpType($request->request->get('value'));


        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DemoController.php',
        ]);
    }
}
