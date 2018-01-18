<?php

namespace Esi\SalutationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BonjourSauceEsiController extends Controller
{
    public function indexAction()
    {
        return $this->render('EsiSalutationsBundle:BonjourSauceEsi:index.html.twig');
    }
    
    public function bonjourAction()
    {
        return $this->render('EsiSalutationsBundle:BonjourSauceEsi:bonjour.html.twig');
    }
    
    public function bonjourNominatifAction($name)
    {
        return $this->render('EsiSalutationsBundle:BonjourSauceEsi:bonjourNominatif.html.twig', array('name' => $name));
    }
}
