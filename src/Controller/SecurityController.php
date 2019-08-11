<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Doctrine\Common\Persistence\ObjectManager;

class SecurityController extends AbstractController
{
    /**
    * @Route("/login", name="login")
    */
    public function login(AuthenticationUtils $authenticationUtils){
        // récupère les erreurs d'authentifications
        $error = $authenticationUtils->getLastAuthenticationError();
        // permet de récupérer le dernier nom d'utilisateur tapé
        $lastUserName = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUserName,
            'error' => $error
        ]);
    }
}
