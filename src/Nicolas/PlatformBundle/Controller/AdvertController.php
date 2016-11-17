<?php

//src/Nicolas/PlatformBundle/Controller/AdvertController.php

namespace Nicolas\PlatformBundle\Controller;

//ne pas oublier ce use
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this
    ->get('templating')
    ->render('NicolasPlatformBundle:Advert:index.html.twig', array('nom' => 'nicolas'));

    return new Response($content);
  }
  /*
    La route fait appel a NicolasPlatformBundle:view,
    on doit donc definir la methode viewAction.
    On donne a cette methode l'argument $id, pour
    correspondre au parametre {id} de la route
  */
  public function viewAction($id)
  {
    /*
      $id vaut 5 si l'on a appele l'URL /platform/advert/5

      Ici, on recuperera depuis la base de donnees
      l'annonce correspondant a l'id $id.
      Puis on passera l'annonce a la vue pour
      qu'elle puisse l'afficher
    */

    return new Response("Affichage de l'annonce d'id : ".$id);
  }

  public function viewSlugAction($year, $slug, $format)
  {

    return new Response(
      "On pourrait afficher l'annonce correspondant au slug '".$slug."', créée en ".$year." et au format ".$format."." 
    );
  }

}
