<?php

namespace Okred\Bundle\JobBundle\Controller;

use DateTime;
use Swift_Mailer;
use Swift_Message;
use Swift_Mime_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DebugController extends Controller
{
    public function sendEmailAction($email)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw $this->createNotFoundException();
        }

        $now = new DateTime();
        /** @var Swift_Mailer $mailer */
        $mailer = $this->get('mailer');
        /** @var Swift_Mime_Message $message */
        $message = Swift_Message::newInstance()
            ->setSubject('OKRED Test email')
            ->setFrom($this->get('service_container')->getParameter('mailer_user'))
            ->setTo($email)
            ->setBody('Test email! Sent at: ' . $now->format(DateTime::ISO8601));
        $mailer->send($message);

        return new Response(
            sprintf(
                '<!doctype html><html><head><title>Debug</title></head><body>Email to %s sent!</body></html>',
                $email
            )
        );
    }

    public function renderViewAction($template)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw $this->createNotFoundException();
        }

        return $this->render($template);
    }
}
