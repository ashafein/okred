<?php

namespace Okred\Bundle\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Okred\Bundle\JobBundle\Form;
use Okred\Bundle\JobBundle\Form\Type;
use Okred\Bundle\UserBundle\Entity\User;

class EmployerController extends Controller
{
    public function profileAction()
    {
        return $this->render(
            'OkredJobBundle:Employer:profile.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'user' => $this->getUser()
                )
            )
        );
    }


    public function responsesAction()
    {
        return $this->render(
            'OkredJobBundle:Employer:responses.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'active_responses' => array()
                )
            )
        );
    }

    protected function getCommonViewParams()
    {
        return array(
            'active_response_count' => 0,
            'vacancy_count'          => 0,
        );
    }
}
