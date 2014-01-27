<?php

namespace Opltda\PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Opltda\EntidadesBundle\Entity\Usuarios;
use Opltda\EntidadesBundle\Entity\Entrevistas;
use Opltda\EntidadesBundle\Entity\InversionVial;
use Opltda\EntidadesBundle\Entity\FocusGroup;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Opltda\EntidadesBundle\Entity\Cadenas;


use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('OpltdaPaginasBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    public function combosCadenaAction(Request $request){
        $elegido = $request->request->get('elegido');
        $em = $this->getDoctrine()->getManager();
                $cadena = new Cadenas();
        $puerto = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findOneBy(array('id' => $elegido));     
       
        
        $cadena = $em->getRepository('OpltdaEntidadesBundle:Cadenas')->findBy(array('puertos' => $elegido));
      
  
        
        

        
$cont = 0;
    foreach ($cadena as $key => $value) {
        $cont ++;
        
     $response[$cont]  = '<option>'. $value->getCodigo() .'</option>';

  
}
     



         
        
  
        
        return new Response(var_dump($response));
        
        
        
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
    
    
    
    public function AutoCompletaCodEntAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $term = $request->request->get('term');
        $busEntrevisar = array();
        $query = $em->createQuery("SELECT o FROM OpltdaEntidadesBundle:Entrevistas o where o.codigoFicha LIKE   '%$term%' ");
        $entrevistas = $query->getResult();
        foreach ($entrevistas  as $entrevistas ) {
                $busEntrevisar [] = $entrevistas->getCodigoFicha();
            }
            
          return new JsonResponse($busEntrevisar);           
    }
    
        
    
      
    
    
        public function AutoCadenaCodEntAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $term = $request->request->get('term');
        $busEntrevisar = array();
        $query = $em->createQuery("SELECT o FROM OpltdaEntidadesBundle:Entrevistas o where o.puertos LIKE   '%$term%' ");
        $entrevistas = $query->getResult();
        foreach ($entrevistas  as $entrevistas ) {
                $busEntrevisar [] = $entrevistas->getPuerto()->getId();
            }
            
          return new JsonResponse($busEntrevisar);           
    }
    
    
    
    public function principalVistaAction(){
        
        $em = $this->getDoctrine()->getManager();
        
         $session = $this->getRequest()->getSession();   
         $usuario = $session->get('usuario'); 
         $password = $session->get('password');
         
         $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
         
         if(!$admin) {
              $entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
             $focusGroup = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
             $puertos = $em->getRepository('OpltdaEntidadesBundle:Puertos')->findAll();
             return $this->render('OpltdaPaginasBundle:Default:principal.html.twig' , array('entrevistas' => $entrevistas , 'focusGroup' => $focusGroup , 'puertos' => $puertos));  
         }else{
            $session->remove($admin);
            $intention = '';
            $csrf = $this->get('form.csrf_provider'); //
            $token = $csrf->generateCsrfToken($intention);
            $em = $this->getDoctrine()->getManager(); 
            return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
         }
         
    
         
    }
    public function LoginVistaAction() {

        $intention = '';
        $csrf = $this->get('form.csrf_provider'); //
        $token = $csrf->generateCsrfToken($intention);
        $em = $this->getDoctrine()->getManager();
        $entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
        $focusGroup = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
        
        
        return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
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

        $session  = new Session();
        if($token == $token1){
        $usuario = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario' => $usuario, 'password' => $password));

        if ($request->getMethod() == 'POST') {
            if($usuario){
                 $session->set('admin', $usuario);
                 return new Response('200');
                 
                 
            } else {
                 return new Response('100');
                 
            }
        } else {


                return new Response('100');
            }
        }
    
    
       return new Response('100');
    }
	
    
    
    
    public function detallePuertoAction($id){
           $em  = $this->getDoctrine()->getManager();
           
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $puertos = $em->getRepository('OpltdaEntidadesBundle:Puertos')->findOneBy(array('id' => $id));
                $entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findBy(array('puertos' => $id));

                return $this->render('OpltdaPaginasBundle:Default:detallePuerto.html.twig', array('puertos'=> $puertos ));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
            }
            

            
            
   
    }
	public function listarFocusGroupAction(){
           $em  = $this->getDoctrine()->getManager();
            
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                       $focusgroup = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
            return $this->render('OpltdaPaginasBundle:Default:listarFocusGroup.html.twig', array('focusgroup'=> $focusgroup));    
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
            }
            
     
	}
	
	public function listarInversionVialAction(){
           $em = $this->getDoctrine()->getManager();
           
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $inversionvial = $em->getRepository('OpltdaEntidadesBundle:InversionVial')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:listarInversionVial.html.twig', array('inversionvial'=>$inversionvial));   
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));                
            }

	}
        
        
            
        
       public function listarMemoriaAction(){
           $em = $this->getDoctrine()->getManager();
        
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $memoriaCalculo = $em->getRepository('OpltdaEntidadesBundle:memoriaCalculo')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:listarMemoriaC.html.twig', array('memoriaCalculo' => $memoriaCalculo));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));                                
            }    

	}
        

	public function listarEntrevistaAction(){
           $em = $this->getDoctrine()->getManager();
           
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $entrevista = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:listarEntrevista.html.twig', array('entrevista' => $entrevista));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));                                
            }                          
	}
        
        
        
        public function listarEstudioAction(){
            
           $em = $this->getDoctrine()->getManager();
                       
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $estudio =  $em->getRepository('OpltdaEntidadesBundle:Estudio')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:listasEstudio.html.twig', array('estudio' => $estudio));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));                                                
            }                          
        }
        public function listarMapasAction(){
           $em = $this->getDoctrine()->getManager();
           
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $mapas =  $em->getRepository('OpltdaEntidadesBundle:Mapas')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:mapas.html.twig', array('mapas' => $mapas));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager(); 
                                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
            }
        }
        
        public function verDetalleEstudioAction($id){
           $em = $this->getDoctrine()->getManager();

           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $estudio = $em->getRepository('OpltdaEntidadesBundle:Estudio')->findOneBy(array('id'=>$id));
                return $this->render('OpltdaPaginasBundle:Default:detalleEstudio.html.twig', array('estudio'=>$estudio));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager();
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));
            }
        }
        
        public function listarModelamientoAction() {
           $em = $this->getDoctrine()->getManager();
            
           $session = $this->getRequest()->getSession();   
           $usuario = $session->get('usuario'); 
           $password = $session->get('password');
         
            $admin = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario'=>$usuario, 'password' => $password));
 
            if(!$admin){
                $modelamiento = $em->getRepository('OpltdaEntidadesBundle:Modelamiento')->findAll();
                return $this->render('OpltdaPaginasBundle:Default:listarModelamiento.html.twig', array('modelamiento'=>$modelamiento));
            }else{
                $session->remove($admin);
                $intention = '';
                $csrf = $this->get('form.csrf_provider'); //
                $token = $csrf->generateCsrfToken($intention);
                $em = $this->getDoctrine()->getManager();
                return $this->render('OpltdaPaginasBundle:Default:login.html.twig' , array('token' => $token));                               
            }
            

        }
}
