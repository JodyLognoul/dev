<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // party
        if (rtrim($pathinfo, '/') === '/party') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'party');
            }

            return array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::indexAction',  '_route' => 'party',);
        }

        // party_show
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::showAction',)), array('_route' => 'party_show'));
        }

        // party_new
        if ($pathinfo === '/party/new') {
            return array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::newAction',  '_route' => 'party_new',);
        }

        // party_create
        if ($pathinfo === '/party/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_create;
            }

            return array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::createAction',  '_route' => 'party_create',);
        }
        not_party_create:

        // party_edit
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::editAction',)), array('_route' => 'party_edit'));
        }

        // party_update
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::updateAction',)), array('_route' => 'party_update'));
        }
        not_party_update:

        // party_delete
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\DefaultBundle\\Controller\\PartyController::deleteAction',)), array('_route' => 'party_delete'));
        }
        not_party_delete:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'gg\\DefaultBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
