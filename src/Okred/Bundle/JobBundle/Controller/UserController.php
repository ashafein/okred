<?php
namespace Okred\Bundle\JobBundle\Controller;

use Doctrine\ORM\EntityManager;
use Okred\Bundle\JobBundle\Entity\CandidateProfile;
use Okred\Bundle\JobBundle\Entity\Resume;
use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UserController extends Controller
{
    public function roleSelectAction()
    {
        return $this->render('OkredJobBundle:User:role_select.html.twig');
    }
}
