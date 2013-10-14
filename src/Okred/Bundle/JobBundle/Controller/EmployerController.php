<?php

namespace Okred\Bundle\JobBundle\Controller;

use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Okred\Bundle\JobBundle\Entity\EmployerInfo;
use Okred\Bundle\JobBundle\Form\Type;
use Okred\Bundle\JobBundle\Form\EmployerProfile;
use Okred\Bundle\FOSUserBundle;

class EmployerController extends Controller
{
    public function profileAction()
    {
        return $this->render(
            'OkredJobBundle:Employer:profile_view.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'user' => $this->getUser()
                )
            )
        );
    }

    public function editAction(Request $request)
    {
        $employer = new User();
        $form = $this->createFormBuilder($employer)
            ->add('firstname')
            ->add('lastname', null)
            ->getForm();


        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // выполняем прочие действие, например, сохраняем задачу в базе данных

                return $this->redirect($this->generateUrl('okred_job_home'));
            }
        }
        return $this->render(
            'OkredJobBundle:Employer:edit.html.twig',
            array_merge(
                array(
                    'user' => $this->getUser(),
                    'form' => $form,
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
