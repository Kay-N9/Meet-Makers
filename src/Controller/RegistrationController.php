<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserType;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use App\Repository\UserTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Parser\Multiple;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }


    /**
     * @Route("/registerlink", name="app_register")
     */
    public function registerlink(): Response
    {
        return $this->render('registration/registerlink.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    /**
     * @Route("/register/{type}", name="app_register")
     */
    public function register(string $type,Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, UserTypeRepository $userTypeRepository): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        if($type == 'complete'){
            $form->add('firstName',TextType::class,
                [
                    'label' => "Prénom* ",
                    'required'=> true,
                ],
            );
            $form->add('lastName',TextType::class,
                [
                    // 'label' => "Nom* ",
                    'required'=> true,
                ],
            );
            $form->add('city',TextType::class,
                [
                    'required'=> true,
                ],
            );
            $form->add('userType',EntityType::class, 
                    [
                        'class' => UserType::class,
                        'choice_label' =>'label',
                        'expanded'=> true, 
                        'multiple'=> false,
                        'required'=> true,
                    ],
                );
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            if($type == 'rapide'){
                $user->setUserType($userTypeRepository->find(1));
            }
           
            switch ($user->getUserType()->getId()) {
                // case 1:
                //     user->setRoles(["ROLE_USER", "ROLE_MUS"]);
                //     break;
                case 2:
                    $user->setRoles(["ROLE_USER", "ROLE_MUSE"]);
                    break;
                case 3:
                    $user->setRoles(["ROLE_USER", "ROLE_MAKER"]);
                    break;
            }
            // if(2 == $user->getUserType()->getId()){
            //     $user->setRoles(["ROLE_USER", "ROLE_MAKER"]);
            // }

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            // $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            //     (new TemplatedEmail())
            //         ->from(new Address('mailer@meet-maker.com', 'Verifmailer'))
            //         ->to($user->getEmail())
            //         ->subject('Please Confirm your Email')
            //         ->htmlTemplate('registration/confirmation_email.html.twig')
            // );
            // do anything else you need here, like send an email

            return $this->redirectToRoute('project_main_home');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    }
    // /**
    //  * @Route("/verify/email", name="app_verify_email")
    //  */
    // public function verifyUserEmail(Request $request): Response
    // {
    //     $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    //     // validate email confirmation link, sets User::isVerified=true and persists
    //     try {
    //         $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
    //     } catch (VerifyEmailExceptionInterface $exception) {
    //         $this->addFlash('verify_email_error', $exception->getReason());

    //         return $this->redirectToRoute('app_register');
    //     }

    //     // @TODO Change the redirect on success and handle or remove the flash message in your templates
    //     $this->addFlash('success', 'Your email address has been verified.');

    //     return $this->redirectToRoute('app_register');
    // }

