<?php 
namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;


class BlogController extends Controller
{
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function infoAstucesAction()
    {
    	return $this->render('blog/accueil-info-astuces.html.twig');
    }
    
    public function infoAstucesShow(string $folder, string $slug)
    {
        return $this->render('blog/infoAstuces/'.$folder.'/'.$slug.'.html.twig');
        
    }

   	public function impression3DAction()
    {
    	return $this->render('blog/accueil-blog.html.twig');
    }

    public function electromobiliteAction()
    {
    	return $this->render('blog/road_trip_04_2019.html.twig');
    }

}