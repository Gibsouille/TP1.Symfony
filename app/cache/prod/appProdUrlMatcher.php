<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // Esi_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Esi_home');
            }

            return array (  '_controller' => 'Esi\\SalutationsBundle\\Controller\\BonjourSauceEsiController::indexAction',  '_route' => 'Esi_home',);
        }

        if (0 === strpos($pathinfo, '/bonjour')) {
            // Esi_bonjour
            if (rtrim($pathinfo, '/') === '/bonjour') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Esi_bonjour');
                }

                return array (  '_controller' => 'Esi\\SalutationsBundle\\Controller\\BonjourSauceEsiController::bonjourAction',  '_route' => 'Esi_bonjour',);
            }

            // Esi_bonjourNominatif
            if (preg_match('#^/bonjour/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Esi_bonjourNominatif')), array (  '_controller' => 'Esi\\SalutationsBundle\\Controller\\BonjourSauceEsiController::bonjourNominatifAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
