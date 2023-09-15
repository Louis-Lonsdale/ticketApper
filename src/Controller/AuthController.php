<?php
declare (strict_types=1);

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    #[Route('/login')]
   public function RandInt() : Response
   {
        $number = random_int(0,10);
        return new Response(
            '<html><body>Lucky Number: ' . $number . '</body></html>'
        );
   }

}