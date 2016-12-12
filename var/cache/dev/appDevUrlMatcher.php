<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/kingdom')) {
            // kingdoms
            if ($pathinfo === '/kingdoms') {
                return array (  '_controller' => 'KingdomGameBundle\\Controller\\BattleController::indexAction',  '_route' => 'kingdoms',);
            }

            // view_kingdom
            if (preg_match('#^/kingdom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_kingdom')), array (  '_controller' => 'KingdomGameBundle\\Controller\\BattleController::showKingdom',));
            }

        }

        // attack_kingdom
        if (0 === strpos($pathinfo, '/attackKingdom') && preg_match('#^/attackKingdom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'attack_kingdom')), array (  '_controller' => 'KingdomGameBundle\\Controller\\BattleController::attack',));
        }

        if (0 === strpos($pathinfo, '/buildings')) {
            // buildings_list
            if ($pathinfo === '/buildings') {
                return array (  '_controller' => 'KingdomGameBundle\\Controller\\BuildingsController::indexAction',  '_route' => 'buildings_list',);
            }

            // building_evolve
            if (0 === strpos($pathinfo, '/buildings/evolve') && preg_match('#^/buildings/evolve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'building_evolve')), array (  '_controller' => 'KingdomGameBundle\\Controller\\BuildingsController::evolve',));
            }

            // buildings_costs
            if ($pathinfo === '/buildings/costs') {
                return array (  '_controller' => 'KingdomGameBundle\\Controller\\BuildingsController::calculateBuildingsCosts',  '_route' => 'buildings_costs',);
            }

        }

        // game_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_game_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'game_index');
            }

            return array (  '_controller' => 'KingdomGameBundle\\Controller\\HomeController::indexAction',  '_route' => 'game_index',);
        }
        not_game_index:

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'KingdomGameBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'KingdomGameBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        // units
        if ($pathinfo === '/units') {
            return array (  '_controller' => 'KingdomGameBundle\\Controller\\UnitsController::indexAction',  '_route' => 'units',);
        }

        // arm_unit
        if (0 === strpos($pathinfo, '/armUnit') && preg_match('#^/armUnit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'arm_unit')), array (  '_controller' => 'KingdomGameBundle\\Controller\\UnitsController::armUnits',));
        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'KingdomGameBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'KingdomGameBundle\\Controller\\UserController::dashboardAction',  '_route' => 'dashboard',);
        }

        // change_Kingdom
        if (0 === strpos($pathinfo, '/player/changeKingdom') && preg_match('#^/player/changeKingdom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_Kingdom')), array (  '_controller' => 'KingdomGameBundle\\Controller\\UserController::changeKingdom',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
