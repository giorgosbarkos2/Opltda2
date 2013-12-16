<?php

namespace Opltda\PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Opltda\EntidadesBundle\Entity\Usuarios;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('OpltdaPaginasBundle:Default:index.html.twig', array('name' => $name));
    }

    public function LoginVistaAction() {

        $intention = '';
        $csrf = $this->get('form.csrf_provider'); //
        $token = $csrf->generateCsrfToken($intention);

        
        
        $em = $this->getDoctrine()->getManager();
        $Entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
        $ArchivosEntrevistas = $em->getRepository('OpltdaEntidadesBundle:ArchivosEntrevistas')->findAll();
        
        
         $Estudio = $em->getRepository('OpltdaEntidadesBundle:Estudio')->findAll();
         $ArchivoEstudio = $em->getRepository('OpltdaEntidadesBundle:ArchivosEstudios')->findAll();
         
         
         $Focus = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
         $ArchivosFocus = $em->getRepository('OpltdaEntidadesBundle:ArchivosFocusGroup')->findAll();
         
         $inversionVial = $em->getRepository('OpltdaEntidadesBundle:InversionVial')->findAll();
         $arhivoInversion = $em->getRepository('OpltdaEntidadesBundle:ArchivosInversionVial')->findAll();
         
         
         
         
        return $this->render('OpltdaPaginasBundle:Default:login.html.twig', array('token' => $token));
    }
    
    
    
    public function pruebaEntidadesAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $Entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
        
        
        
        return $this->render('OpltdaPaginasBundle:Default:prueba.html.twig', array('Entrevistas' => $Entrevistas));
        
        
        
        
        
    }

    public function loginAction(Request $request) {

        
        $intention = '';
        $csrf = $this->get('form.csrf_provider'); //
        $token1 = $csrf->generateCsrfToken($intention);
        
        $usuario = $request->request->get('usuario');
        $password = $request->request->get('password');
        $token = $request->request->get('token');
       
        $em = $this->getDoctrine()->getManager();

         if($token == $token1){
        $usuario = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario' => $usuario, 'password' => $password));

        if ($request->getMethod() == 'POST') {
            

            if ($usuario) {
                
                 return new Response('200');
                
            } else {

                return new Response('100');
            }
        } else {


            return new Response('100');
        }
    }
    
    }

}
