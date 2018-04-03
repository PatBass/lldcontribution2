<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 9/29/15
 * Time: 8:40 AM
 */

namespace UserBundle\Controller;


use UserBundle\Form\Type\RegistrationEditFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{
    public function adminAction()
    {
        $user = $this->getUser();
        /*if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') || !$this->container->get('security.context')->isGranted('ROLE_ADMIN') || !$this->container->get('security.context')->isGranted('ROLE_AGENT') || !$this->container->get('security.context')->isGranted('ROLE_AGENT')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }*/

        /*
         $userManager = $this->container->get('fos_user.user_manager');
         Changing the role of the user
        $user->addRole('ROLE_ADMIN');
         Updating the user
        $userManager->updateUser($user);

        var_dump($user);exit;
         */

        $userManager = $this->container->get('fos_user.user_manager');

        $users = $userManager->findUsers();

        return $this->render('UserBundle:Admin:admin.html.twig', array(
            'users' => $users,
            'user' => $user
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        if(null === $user)
        {
            throw new NotFoundHttpException("User with id ".$id." doesn't exist.");
        }

        $userManager->deleteUser($user);

        $mailer = $this->get('mailer');

        $manager = $this->get('security.context')->getToken()->getUser();

        $message =  \Swift_Message::newInstance()
            ->setSubject('Message from lldcontribution.com')
            ->setFrom('contact@lldcontribution.com')
            ->setTo('patrickbassoukissa@gmail.com')
            ->setBody("Hi,"."\n\n"."The profile of ".$user->getFirstName()." ".$user->getLastName()." has been deleted by the one using the email ".$manager->getEmail()."\n\n". "Sincerely,"."\n"."LLD Contribution Team")
        ;

        $mailer->send($message);

        $request->getSession()->getFlashBag()->add('info-delete', 'The user '.strtoupper($user->getLastName()).' '.strtoupper($user->getLastName()).' has been deleted successfully!');
        return $this->redirect($this->generateUrl('lld_admin'));

    }

    public function deactivateAction(Request $request, $id)
    {
        if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        if(null === $user)
        {
            throw new NotFoundHttpException("User with id ".$id." doesn't exist.");
        }

        //$user->setLocked(true);
        $user->setEnabled(false);
        $userManager->updateUser($user);

        $mailer = $this->get('mailer');

        $manager = $this->get('security.context')->getToken()->getUser();

        $message =  \Swift_Message::newInstance()
            ->setSubject('Message from lldcontribution.com')
            ->setFrom('contact@lldcontribution.com')
            ->setTo('patrickbassoukissa@gmail.com')
            ->setBody("Hi,"."\n\n"."The profile of ".$user->getFirstName()." ".$user->getLastName()." has been disabled by the one using the email ".$manager->getEmail()."\n\n". "Sincerely,"."\n"."LLD Contribution Team")
        ;

        $mailer->send($message);

        $request->getSession()->getFlashBag()->add('info-deactivate', 'The user '.strtoupper($user->getFirstName().' '.$user->getLastName()).' has been disabled successfully! ');

        return $this->redirect($this->generateUrl('lld_admin'));
    }

    public function activateAction(Request $request, $id)
    {
        if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        if(null === $user)
        {
            throw new NotFoundHttpException("User with id ".$id." doesn't exist.");
        }

        $user->setEnabled(true);
        $userManager->updateUser($user);

        $mailer = $this->get('mailer');

        $manager = $this->get('security.context')->getToken()->getUser();

        $message =  \Swift_Message::newInstance()
            ->setSubject('Message from lldcontribution.com')
            ->setFrom('contact@lldcontribution.com')
            ->setTo('patrickbassoukissa@gmail.com')
            ->setBody("Hi,"."\n\n"."The profile of ".$user->getFirstName()." ".$user->getLastName()." has been enabled by the one using the email ".$manager->getEmail()."\n\n". "Sincerely,"."\n"."LLD Contribution Team")
        ;

        $mailer->send($message);

        $request->getSession()->getFlashBag()->add('info-activate', 'The user '.strtoupper($user->getFirstName().' '.$user->getLastName()).' has been activated successfully! ');
        return $this->redirect($this->generateUrl('lld_admin'));
    }
} 