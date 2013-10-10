<?php

namespace Okred\Bundle\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CandidateController extends Controller
{
    public function profileAction()
    {
        return $this->render(
            'OkredJobBundle:Candidate:profile.html.twig',
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
