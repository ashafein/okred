<?php

namespace Okred\Bundle\JobBundle\Controller;

use Doctrine\ORM\EntityManager;
use Okred\Bundle\JobBundle\Entity\Company;
use Okred\Bundle\JobBundle\Entity\EmployerInfo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Okred\Bundle\JobBundle\Form;
use Okred\Bundle\JobBundle\Form\Type;
use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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

    public function companyEditAction($id = 1)
    {

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        if (isset($id)) {
            $entity = $em->find('OkredJobBundle:Company', $id);
        } else {
            /** @var User $user */
            $user = $this->getUser();
            /** @var EmployerInfo $employer */
            $candidate = $em->find('OkredJobBundle:EmployerInfo', $user->getId());
            if (!$candidate) {
                throw new AccessDeniedHttpException();
            }
            $entity = new Company();
            $entity->setEmployerId($employer);
        }
        if (!$entity) {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm('okred_job_company_form', $entity);


        $request = $this->getRequest();
        if ($request->isMethod('POST')) {

            if ($form->handleRequest($request)->isValid()) {

                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('okred_job_home'));
            }
        }

        return $this->render(
            'OkredJobBundle:Employer:create.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'form' => $form->createView(),
                )
            )
        );
    }
}
