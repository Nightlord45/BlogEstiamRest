<?php
/**
 * Created by PhpStorm.
 * User: florian
 * Date: 08/06/18
 * Time: 15:47
 */

namespace App\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request):Response{
        return $this->render('admin/layout.html.twig');
    }

}