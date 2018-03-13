<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 6/18/15
 * Time: 1:51 PM
 */

namespace MainBundle\DoctrineListener;



use MainBundle\Entity\Contact;
use Doctrine\ORM\Event\LifecycleEventArgs;

class ContactListener
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function postPersist(LifecycleEventArgs $arg)
    {
        $entity = $arg->getEntity();

        if ($entity instanceof Contact) {

            $message =  \Swift_Message::newInstance()
                ->setSubject('New Message from Yplushy Contact Form')
                ->setFrom('admin@yafabhi.com')
                ->setTo('patrickbassoukissa@yahoo.fr')
                ->setBody("You have received a new message from Yplushy contact form.\n\n"."Here are the details:\n\nName: ".$entity->getName()."\n\nEmail: ".$entity->getEmail()."\n\nMessage:\n".$entity->getMessage())

            ;

            $this->mailer->send($message);

        }

    }
} 