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
         $entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
         $focusGroup = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
         $puertos = $em->getRepository('OpltdaEntidadesBundle:Puertos')->findAll();
         return $this->render('OpltdaPaginasBundle:Default:principal.html.twig' , array('entrevistas' => $entrevistas , 'focusGroup' => $focusGroup , 'puertos' => $puertos));
    
         
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

         if($token == $token1){
        $usuario = $em->getRepository('OpltdaEntidadesBundle:Usuarios')->findOneBy(array('usuario' => $usuario, 'password' => $password));

        if ($request->getMethod() == 'POST') {
            if($usuario){
       
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
           
            $puertos = $em->getRepository('OpltdaEntidadesBundle:Puertos')->findOneBy(array('id' => $id));
            $entrevistas = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findBy(array('puertos' => $id));
            
            return $this->render('OpltdaPaginasBundle:Default:detallePuerto.html.twig', array('puertos'=> $puertos ));
            
            
   
    }
	public function listarFocusGroupAction(){
            $em  = $this->getDoctrine()->getManager();
            $focusgroup = $em->getRepository('OpltdaEntidadesBundle:FocusGroup')->findAll();
            return $this->render('OpltdaPaginasBundle:Default:listarFocusGroup.html.twig', array('focusgroup'=> $focusgroup));
	}
	
	public function listarInversionVialAction(){
            $em = $this->getDoctrine()->getManager();
            $inversionvial = $em->getRepository('OpltdaEntidadesBundle:InversionVial')->findAll();
            return $this->render('OpltdaPaginasBundle:Default:listarInversionVial.html.twig', array('inversionvial'=>$inversionvial));
	}
        
        
            
        
        	public function listarMemoriaAction(){
            $em = $this->getDoctrine()->getManager();
            $memoriaCalculo = $em->getRepository('OpltdaEntidadesBundle:memoriaCalculo')->findAll();
              return $this->render('OpltdaPaginasBundle:Default:listarMemoriaC.html.twig', array('memoriaCalculo' => $memoriaCalculo));
	}
        

	public function listarEntrevistaAction(){
            $em = $this->getDoctrine()->getManager();
            $entrevista = $em->getRepository('OpltdaEntidadesBundle:Entrevistas')->findAll();
            
            
            return $this->render('OpltdaPaginasBundle:Default:listarEntrevista.html.twig', array('entrevista' => $entrevista));
	}
}
