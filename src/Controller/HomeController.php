<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController {

    public function  bonjour(){

        return new Response("Bonjour a tous et a tous");
    }

    public function aurevoir(){

        return $this->redirectToRoute('accueil');
    }

    public function redirectlkd(){

        return $this->redirect('http://bms.com');
    }

    public function showtemplate(){

        return $this->render('base.html.twig',[]);
    }

    #[Route("/products", name:"products_list")]
    public function showproducts(){
        $products=['phone','radio','mobile'];

        return $this->render('product.html.twig',['products'=>$products]);
    }

    #[Route("/customers",name:"customers_list")]
    public function showcustomer(){
        $customers=['bms','tls', 'pms','tms'];

        return $this->render('customer.html.twig',['customers'=>$customers]);
    }
    #[Route("/category/{id}",name:"Category")]
    public function getCategory($id){
        $category_id=$id;

        return $this->render('category.html.twig',['id_category'=>$category_id ]);
    }
}
