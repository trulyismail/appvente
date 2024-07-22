<?php

namespace App\Controller;
use App\Form\UserType;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        $user= new User();
        $form= $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        

if($form->isSubmitted()&&$form->isValid()){
    $user=$form->getData();
    
    $password=$hasher->hashPassword($user,$user->getPassword());
    $user->setPassword($password);

    $entityManager->persist($user);
    $entityManager->flush();
}
        return $this->render('user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
