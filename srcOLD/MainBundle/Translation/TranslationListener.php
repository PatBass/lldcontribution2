<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 4/13/16
 * Time: 6:17 PM
 */

namespace MainBundle\Translation;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class TranslationListener implements EventSubscriberInterface
{
    private $defaultLocale;

    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        /*if (!$event->isMasterRequest()) {
            return;
        }*/

        if (!$request->hasPreviousSession()) {
            return;
        }

        // On essaie de voir si la locale a été fixée dans le paramètre de routing _locale
        if ($locale = $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        } else {
            // Si aucune locale n'a été fixée explicitement dans la requête, on utilise celle de la session
            $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
        }
    }


    public static function getSubscribedEvents()
    {
        return array(
            // Doit être enregistré avant le Locale listener par défaut
            KernelEvents::REQUEST => array(array('onKernelRequest', 17)),
        );
    }
} 