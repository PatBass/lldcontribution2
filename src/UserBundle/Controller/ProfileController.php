<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UserBundle\Controller;

use UserBundle\Entity\User;
use UserBundle\Form\Type\RegistrationEditFormType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{
    /**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('UserBundle:Profile:show.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * Edit the user
     */
    public function editAction($id)
    {
        //die('ok');
        //$user = $this->getUser();

        //$id = $request->request->get('id');


        $user = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('UserBundle:User')
            ->find($id)
        ;


        $request = $this->getRequest();

        if (!is_object($user) || !($user instanceof UserInterface)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        //$formFactory = $this->get('fos_user.profile.form.factory');

        //$form = $formFactory->createForm();

        $form = $this->createForm(new RegistrationEditFormType(), $user);
        //$form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {


            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $amount = $request->request->get('amount');

            $user->setEmail($request->request->get('email'));
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setPhone($request->request->get('phone'));
            $user->setAmount($request->request->get('amount'));
            $user->setUpdatedAt(new \DateTime());

            //var_dump($user);die();

            // Updating the user
            $userManager->updateUser($user);

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            //$userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('lld_admin');
                $response = new RedirectResponse($url);
            }



            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            $mailer = $this->get('mailer');

            $manager = $this->get('security.context')->getToken()->getUser();

            $message =  \Swift_Message::newInstance()
                ->setSubject('Message from lldcontribution.com')
                ->setFrom('contact@lldcontribution.com')
                ->setTo('patrickbassoukissa@gmail.com')
                ->setBody("Hi,"."\n\n"."The profile of ".$user->getFirstName()." ".$user->getLastName()." has been edited by the one using the email ".$manager->getEmail()."\n\n". "Sincerely,"."\n"."LLD Contribution Team")
            ;

            $mailer->send($message);

            return $response;
        }
        $request->getSession()->getFlashBag()->add('info-edit', 'Your account has been updated!');
        return $this->render('UserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }


    public function accountAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();



        if ($request->request->get('code')) {

            //var_dump($request->request->get('code'));die();


            $codes = array();
            foreach ($users as $user) {
                $codeBdd = (int)$user->getCode();

                $codes[] = $codeBdd;

            }

            if ($request->request->get('code') != '15lld') {

                if (in_array($request->request->get('code'), $codes)) {
                    $thisUser = $em->getRepository('UserBundle:User')->findOneBy(array('code' => $request->request->get('code')));
                    $session = $request->getSession();

                    $session->set('thisUser', $thisUser);



                    //return $this->redirect($this->generateUrl('lld_profile_show'));
                    if ($session->get('thisUser')->isEnabled()) {
                        return $this->render('UserBundle:Profile:show.html.twig', array(
                            'thisuser' => $session->get('thisUser')
                        ));
                    } else {
                        return $this->redirect($this->generateUrl('lld_account'));
                    }

                } else {
                    $request->getSession()->getFlashBag()->add('no-token', 'That number is unknown in our system');
                    return $this->render("UserBundle:Security:account_checking.html.twig", array(
                        'thisuser' => null
                    ));
                }
            } else {
                return $this->redirect($this->generateUrl('fos_user_security_login'));
            }

        }

        return $this->render("UserBundle:Security:account_checking.html.twig", array(
            'thisuser' => null
        ));
    }

    public function profileShowAction()
    {
        return $this->render('UserBundle:Profile:show.html.twig');
    }

    public function logoutAction()
    {
        return $this->render('MainBundle:Main:home.html.twig');
    }

    public function accountLogoutAction(Request $request)
    {
        if ($request->getSession()->get('thisUser')) {
            $request->getSession()->set('thisUser', null);
            return $this->redirect($this->generateUrl('home'));
        }
    }
}
