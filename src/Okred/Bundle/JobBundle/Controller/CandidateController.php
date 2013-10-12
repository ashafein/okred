<?php

namespace Okred\Bundle\JobBundle\Controller;

use Doctrine\ORM\EntityManager;
use Okred\Bundle\JobBundle\Entity\CandidateProfile;
use Okred\Bundle\JobBundle\Entity\Resume;
use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class CandidateController extends Controller
{
    public function registerAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        /** @var User $user */
        $user = $this->getUser();
        /** @var CandidateProfile $candidateProfile */
        $candidateProfile = $em->find('OkredJobBundle:CandidateProfile', $user->getId());
        if (!$candidateProfile) {
            $candidateProfile = new CandidateProfile();
            $candidateProfile->setUser($user);
        }

        $form = $this->createForm('okred_job_candidate_profile_form', $candidateProfile);
        $request = $this->getRequest();

        if ($request->isMethod('POST')) {
            if ($form->handleRequest($request)->isValid()) {
                $em->persist($candidateProfile);
                $em->flush();
                return $this->redirect('/');
            }
        }

        return $this->render(
            'OkredJobBundle:Candidate:profile_form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function profileAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        /** @var User $user */
        $user = $this->getUser();
        $profile = $em->find('OkredJobBundle:CandidateProfile', $user->getId());
        if (!$profile) {
            return $this->redirect($this->generateUrl('okred_job_candidate_profile_edit'));
        }

        return $this->render(
            'OkredJobBundle:Candidate:profile.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'user'    => $user,
                    'profile' => $profile,
                )
            )
        );
    }

    public function resumeAction()
    {
        return $this->render(
            'OkredJobBundle:Candidate:resume.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'list' => array()
                )
            )
        );
    }

    public function resumeEditAction($id)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        if ($id) {
            $entity = $em->find('OkredJobBundle:Resume', $id);
        } else {
            /** @var User $user */
            $user = $this->getUser();
            /** @var CandidateProfile $candidate */
            $candidate = $em->find('OkredJobBundle:CandidateProfile', $user->getId());
            if (!$candidate) {
                throw new AccessDeniedHttpException();
            }
            $entity = new Resume();
            $entity->setCandidate($candidate);
        }
        if (!$entity) {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm('okred_job_resume_form', $entity);
        return $this->render(
            'OkredJobBundle:Candidate:resume_edit.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'form' => $form->createView(),
                )
            )
        );
    }

    public function searchHistoryAction()
    {
        return $this->render(
            'OkredJobBundle:Candidate:search_history.html.twig',
            array_merge(
                $this->getCommonViewParams(),
                array(
                    'list' => array()
                )
            )
        );
    }

    public function responsesAction()
    {
        return $this->render(
            'OkredJobBundle:Candidate:responses.html.twig',
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
            'resume_count'          => 0,
        );
    }
}
