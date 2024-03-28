<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecipeController extends AbstractController
{
 #[Route('/recette',name: 'app_recipe_index')]
     public function index(Request $request): Response{
     return $this->render('recipe/index.html.twig');
}


    #slug represente le poulet et id represente 13 dans le navigateur
    #slug nous empeche de d'afficher une erreur (une partie de url)
    #[Route(path: '/recette/{slug}-{id}', name: 'app_recipe_show', requirements : ['id'=> '\d+', 'slug'=> '[a-z0-9-]+'])] 
    #cette ligne de code nou permet d'avoir le slug(poulet-dg) de le id(12) 
      public function show(Request $request,string $slug,int $id): Response{
        
        // return new Response(("Recette numero ". $id ." ; ".$slug));
        //version sous forme de json        
    // return new JsonResponse([
    //          'id' => $id,
    //         'slug' => $slug
    //     ]);
        //Affiche en Json sans besoin d'import
        // return $this->Json([
        //     'id' => $id,
        //     'slug' => $slug
        // ]);
        // dd($slug,$id);
    // dd($request->attributes->get('slug'),$request->attributes->getInt('id'));
        #(affichage Exo3et4)
        // return new Response("bienvenue dans la page des recettes");
        //  return new Response("bienvenue dans la page ".$request->query->get('recette','des recettes !!!'));
                        // exoshow
        // return $this->render('recipe/show.html.twig');
        
        return $this->render('recipe/show.html.twig',[
            'slug' =>$slug,
            'id' =>$id
        ]);


      }
    }
    

