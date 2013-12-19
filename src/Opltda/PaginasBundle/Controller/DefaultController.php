<?php

namespace Opltda\PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Opltda\EntidadesBundle\Entity\Usuarios;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('OpltdaPaginasBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function AutocompletaAction(Request $request){
        
 
       
            return $this->render('OpltdaPaginasBundle:Default:prueba.html.twig');
    }
    
    
        public function autoAction(Request $request){
            
                 $em = $this->getDoctrine()->getManager();
                 
        
          $term = $request->request->get('term');
            $regiones = $em->getRepository('OpltdaEntidadesBundle:Regiones')->findBy(array('id' => $term));
             
            $film_titles = array();
             
            foreach ($regiones  as $regiones ) {
                
                $film_titles [] = $regiones ->getNombre().' - '.$regiones ->getId();
                
            }
         
            return new JsonResponse($film_titles);
            
       
                
    }
    
    
    
    public function principalVistaAction(){
         return $this->render('OpltdaPaginasBundle:Default:principal.html.twig');
    }
    public function LoginVistaAction() {

        $intention = '';
        $csrf = $this->get('form.csrf_provider'); //
        $token = $csrf->generateCsrfToken($intention);

        
        
        $em = $this->getDoctrine()->getManager();
        $Entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
        $ArchivosEntrevistas = $em->getRepository('OpltdaEntidadesBundle:ArchivosEntrevistas')->findAll();
        
        
        $regiones = $em->getRepository('OpltdaEntidadesBundle:Regiones')->findAll();
        
         $Estudio = $em->getRepository('OpltdaEntidadesBundle:Estudio')->findAll();
         $ArchivoEstudio = $em->getRepository('OpltdaEntidadesBundle:ArchivosEstudios')->findAll();
         
         
         $Focus = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
         $ArchivosFocus = $em->getRepository('OpltdaEntidadesBundle:ArchivosFocusGroup')->findAll();
         
         $inversionVial = $em->getRepository('OpltdaEntidadesBundle:InversionVial')->findAll();
         $arhivoInversion = $em->getRepository('OpltdaEntidadesBundle:ArchivosInversionVial')->findAll();
         
         
         
         $mapas = $em->getRepository('OpltdaEntidadesBundle:Mapas')->findAll();
         $archivosMapas = $em->getRepository('OpltdaEntidadesBundle:ArchivosMapas')->findAll();
        
 
         
         
        return $this->render('OpltdaPaginasBundle:Default:login.html.twig', array('token' => $token , 'regiones' => $regiones));
    }
    
    
    
      public function searchRegionAction(Request $request)
    {
        $q = $request->get('term');
        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('OpltdaEntidadesBundle:Regiones')->findLikeName($q);

        return compact('results');
    }

    public function getRegionAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $hostess = $em->getRepository('OpltdaEntidadesBundle:Regiones')->find($id);

        return new Response($hostess->getNombre());
        
        
        
        
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
                
                  return $this->redirect($this->generateUrl('principal'));
                 return new Response('200');
                 
               
                
            } else {

                return new Response('100');
            }
        } else {


            return new Response('100');
        }
    }
    
    }
	
	public function listarFocusGroupAction(){
		return $this->render('OpltdaPaginasBundle:Default:listarFocusGroup.html.twig');
	}
	
	public function listarInversionVialAction(){
		return $this->render('OpltdaPaginasBundle:Default:listarInversionVial.html.twig');
	}

	public function listarEntrevistaAction(){
		return $this->render('OpltdaPaginasBundle:Default:listarEntrevista.html.twig');
	}

}
