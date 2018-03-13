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
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') || !$this->container->get('security.context')->isGranted('ROLE_ADMIN') || !$this->container->get('security.context')->isGranted('ROLE_AGENT')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

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
            'users' => $users
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
        $user->isEnabled(false);
        $userManager->updateUser($user);

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

        $user->setLocked(false);
        $userManager->updateUser($user);

        $request->getSession()->getFlashBag()->add('info-activate', 'The user '.strtoupper($user->getCompanyName()).' has been activated successfully! ');
        return $this->redirect($this->generateUrl('admin'));
    }
} 