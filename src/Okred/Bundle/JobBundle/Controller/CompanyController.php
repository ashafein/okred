<?php

namespace Okred\Bundle\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Okred\Bundle\JobBundle\Form;
use Okred\Bundle\JobBundle\Form\Type;
use Okred\Bundle\UserBundle\Entity\Company;

class CompanyController extends Controller
{
    public function viewAction($id)
    {
        $company = new Company();



        return $this->render(
            'OkredJobBundle:Company:view',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'user' => $this->getUser(),
                    'company' => "",
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
