<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{

    public function __construct(
        private PythagoreUtility $pythagoreUtility,
    ) {
        // $this->pythagoreUtility = $pythagoreUtility;
    }


    #[Route('/pythagore/view', name: 'app_pythagore_view')]
    public function DisplayPythagoreAction(): Response
    {
        // $htmlResponse = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'htmlResponseTable' => $this->pythagoreUtility->display(),
        ]);
    }
}
