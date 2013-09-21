<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        // _welcome
        if ($pathinfo === '/bienvenida') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/backend/botellas')) {
            // botellas
            if (rtrim($pathinfo, '/') === '/backend/botellas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_botellas;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'botellas');
                }

                return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::indexAction',  '_route' => 'botellas',);
            }
            not_botellas:

            // botellas_create
            if ($pathinfo === '/backend/botellas/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_botellas_create;
                }

                return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::createAction',  '_route' => 'botellas_create',);
            }
            not_botellas_create:

            // botellas_new
            if ($pathinfo === '/backend/botellas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_botellas_new;
                }

                return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::newAction',  '_route' => 'botellas_new',);
            }
            not_botellas_new:

            // botellas_show
            if (preg_match('#^/backend/botellas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_botellas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'botellas_show')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::showAction',));
            }
            not_botellas_show:

            // botellas_edit
            if (preg_match('#^/backend/botellas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_botellas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'botellas_edit')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::editAction',));
            }
            not_botellas_edit:

            // botellas_update
            if (preg_match('#^/backend/botellas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_botellas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'botellas_update')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::updateAction',));
            }
            not_botellas_update:

            // botellas_delete
            if (preg_match('#^/backend/botellas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_botellas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'botellas_delete')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\BotellasController::deleteAction',));
            }
            not_botellas_delete:

        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|es)/inicio$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::indexAction',));
        }

        // splash
        if (preg_match('#^/(?P<_locale>en|es)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'splash');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'splash')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::splashAction',));
        }

        // richpolis_frontend_default_splash
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'richpolis_frontend_default_splash');
            }

            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::splashAction',  '_route' => 'richpolis_frontend_default_splash',);
        }

        // about_la_nina
        if (preg_match('#^/(?P<_locale>en|es)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'about_la_nina')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::aboutAction',));
        }

        // richpolis_frontend_default_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'richpolis_frontend_default_about',);
        }

        // the_mezcal
        if (preg_match('#^/(?P<_locale>en|es)/mezcal$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'the_mezcal')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::mezcalAction',));
        }

        // botella_espadin
        if (preg_match('#^/(?P<_locale>en|es)/mezcal/espadin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'botella_espadin')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::espadinAction',));
        }

        // richpolis_frontend_default_espadin
        if ($pathinfo === '/mezcal/espadin') {
            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::espadinAction',  '_route' => 'richpolis_frontend_default_espadin',);
        }

        // botella_primario
        if (preg_match('#^/(?P<_locale>en|es)/mezcal/primario$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'botella_primario')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::primarioAction',));
        }

        // richpolis_frontend_default_primario
        if ($pathinfo === '/mezcal/primario') {
            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::primarioAction',  '_route' => 'richpolis_frontend_default_primario',);
        }

        // find_la_nina
        if (preg_match('#^/(?P<_locale>en|es)/find$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'find_la_nina')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::findAction',));
        }

        // richpolis_frontend_default_find
        if ($pathinfo === '/find') {
            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::findAction',  '_route' => 'richpolis_frontend_default_find',);
        }

        // frontend_contacto
        if (preg_match('#^/(?P<_locale>en|es)/contacto$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_frontend_contacto;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_contacto')), array (  '_locale' => 'en',  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::contactoAction',));
        }
        not_frontend_contacto:

        // richpolis_frontend_default_contacto
        if ($pathinfo === '/contacto') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_richpolis_frontend_default_contacto;
            }

            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'richpolis_frontend_default_contacto',);
        }
        not_richpolis_frontend_default_contacto:

        // last_tweets
        if (0 === strpos($pathinfo, '/last-tweets') && preg_match('#^/last\\-tweets/(?P<username>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'last_tweets');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'last_tweets')), array (  'limit' => 10,  'age' => NULL,  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::lastTweetsAction',));
        }

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/mensajes')) {
                // mensajes
                if (rtrim($pathinfo, '/') === '/backend/mensajes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mensajes');
                    }

                    return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::indexAction',  '_route' => 'mensajes',);
                }

                // mensajes_seleccionar_botella
                if ($pathinfo === '/backend/mensajes/seleccionar/botella') {
                    return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::selectAction',  '_route' => 'mensajes_seleccionar_botella',);
                }

                // mensajes_por_botella
                if (0 === strpos($pathinfo, '/backend/mensajes/list') && preg_match('#^/backend/mensajes/list/(?P<botella>[^/]++)/botella$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensajes_por_botella')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::porCategoriaAction',));
                }

                // mensajes_show
                if (preg_match('#^/backend/mensajes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensajes_show')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::showAction',));
                }

                // mensajes_new
                if ($pathinfo === '/backend/mensajes/new') {
                    return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::newAction',  '_route' => 'mensajes_new',);
                }

                // mensajes_create
                if ($pathinfo === '/backend/mensajes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mensajes_create;
                    }

                    return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::createAction',  '_route' => 'mensajes_create',);
                }
                not_mensajes_create:

                // mensajes_edit
                if (preg_match('#^/backend/mensajes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensajes_edit')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::editAction',));
                }

                // mensajes_update
                if (preg_match('#^/backend/mensajes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mensajes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensajes_update')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::updateAction',));
                }
                not_mensajes_update:

                // mensajes_delete
                if (preg_match('#^/backend/mensajes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mensajes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensajes_delete')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\MensajesController::deleteAction',));
                }
                not_mensajes_delete:

            }

            if (0 === strpos($pathinfo, '/backend/categorias')) {
                // categorias
                if (rtrim($pathinfo, '/') === '/backend/categorias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorias');
                    }

                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::indexAction',  '_route' => 'categorias',);
                }

                // categorias_seleccionar
                if ($pathinfo === '/backend/categorias/seleccionar') {
                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::selectAction',  '_route' => 'categorias_seleccionar',);
                }

                // categorias_por_tipo
                if (0 === strpos($pathinfo, '/backend/categorias/list') && preg_match('#^/backend/categorias/list/(?P<tipo>[^/]++)/tipo$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_por_tipo')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::porTipoAction',));
                }

                // categorias_show
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::showAction',));
                }

                // categorias_show_tipo
                if (0 === strpos($pathinfo, '/backend/categorias/show') && preg_match('#^/backend/categorias/show/(?P<tipo>[^/]++)/tipo$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show_tipo')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::showCategoriaAction',));
                }

                // categorias_new
                if ($pathinfo === '/backend/categorias/new') {
                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::newAction',  '_route' => 'categorias_new',);
                }

                // categorias_create
                if ($pathinfo === '/backend/categorias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorias_create;
                    }

                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::createAction',  '_route' => 'categorias_create',);
                }
                not_categorias_create:

                // categorias_edit
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_edit')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::editAction',));
                }

                // categorias_update
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_update')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::updateAction',));
                }
                not_categorias_update:

                // categorias_delete
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_delete')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::deleteAction',));
                }
                not_categorias_delete:

                // categorias_galeria
                if (0 === strpos($pathinfo, '/backend/categorias/galeria') && preg_match('#^/backend/categorias/galeria/(?P<categoria>[^/]++)/(?P<isActive>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_galeria')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::galeriaAction',));
                }

                // categorias_ordenar
                if ($pathinfo === '/backend/categorias/ordenar') {
                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::ordenarGaleriaAction',  '_route' => 'categorias_ordenar',);
                }

                // categorias_up
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_up;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_up')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::upAction',));
                }
                not_categorias_up:

                // categorias_down
                if (preg_match('#^/backend/categorias/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_down;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_down')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\CategoriasController::downAction',));
                }
                not_categorias_down:

            }

            if (0 === strpos($pathinfo, '/backend/galerias')) {
                // galerias
                if (rtrim($pathinfo, '/') === '/backend/galerias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'galerias');
                    }

                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::indexAction',  '_route' => 'galerias',);
                }

                // galerias_show
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_show')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::showAction',));
                }

                // galerias_new
                if ($pathinfo === '/backend/galerias/new') {
                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::newAction',  '_route' => 'galerias_new',);
                }

                // galerias_create
                if ($pathinfo === '/backend/galerias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_galerias_create;
                    }

                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::createAction',  '_route' => 'galerias_create',);
                }
                not_galerias_create:

                // galerias_edit
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_edit')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::editAction',));
                }

                // galerias_update
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_galerias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_update')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::updateAction',));
                }
                not_galerias_update:

                // galerias_delete
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_galerias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_delete')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::deleteAction',));
                }
                not_galerias_delete:

                // galerias_upload
                if (0 === strpos($pathinfo, '/backend/galerias/upload/registro/galeria') && preg_match('#^/backend/galerias/upload/registro/galeria/(?P<categoria_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_upload')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::uploadAction',));
                }

                // galerias_galeria
                if (0 === strpos($pathinfo, '/backend/galerias/mostrar/registros') && preg_match('#^/backend/galerias/mostrar/registros/(?P<categoria>[^/]++)/(?P<isActive>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_galeria')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::galeriaAction',));
                }

                // galerias_update_registro
                if ($pathinfo === '/backend/galerias/actualizar/registro/galeria') {
                    return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::updateRegistroGaleriaAction',  '_route' => 'galerias_update_registro',);
                }

                // galerias_delete_registro
                if (0 === strpos($pathinfo, '/backend/galerias/eliminar/registro/galeria') && preg_match('#^/backend/galerias/eliminar/registro/galeria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_delete_registro')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::deleteRegistroGaleriaAction',));
                }

                // galerias_activar
                if (0 === strpos($pathinfo, '/backend/galerias/activar/registro/galeria') && preg_match('#^/backend/galerias/activar/registro/galeria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_activar')), array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::activarAction',));
                }

                if (0 === strpos($pathinfo, '/backend/galerias/cambiar')) {
                    // galerias_cambiar_tipo_categoria
                    if ($pathinfo === '/backend/galerias/cambiar/tipo/categoria') {
                        return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::cambiarTipoCategoriaAction',  '_route' => 'galerias_cambiar_tipo_categoria',);
                    }

                    // galerias_cambiar_archivo_categoria
                    if ($pathinfo === '/backend/galerias/cambiar/archivo/categoria') {
                        return array (  '_controller' => 'Richpolis\\CategoriasGaleriaBundle\\Controller\\GaleriasController::cambiarArchivoCategoriaAction',  '_route' => 'galerias_cambiar_archivo_categoria',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/backend/publicacion')) {
                if (0 === strpos($pathinfo, '/backend/publicaciones')) {
                    // publicaciones
                    if (rtrim($pathinfo, '/') === '/backend/publicaciones') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'publicaciones');
                        }

                        return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::indexAction',  '_route' => 'publicaciones',);
                    }

                    // publicaciones_seleccionar
                    if ($pathinfo === '/backend/publicaciones/seleccionar') {
                        return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::selectAction',  '_route' => 'publicaciones_seleccionar',);
                    }

                    // publicaciones_por_tipo
                    if (0 === strpos($pathinfo, '/backend/publicaciones/list') && preg_match('#^/backend/publicaciones/list/(?P<tipo>[^/]++)/tipo$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_por_tipo')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::porTipoAction',));
                    }

                    // publicaciones_show
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_show')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::showAction',));
                    }

                    // publicaciones_show_tipo
                    if (0 === strpos($pathinfo, '/backend/publicaciones/show') && preg_match('#^/backend/publicaciones/show/(?P<tipo>[^/]++)/tipo$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_show_tipo')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::showCategoriaAction',));
                    }

                    // publicaciones_new
                    if ($pathinfo === '/backend/publicaciones/new') {
                        return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::newAction',  '_route' => 'publicaciones_new',);
                    }

                    // publicaciones_create
                    if ($pathinfo === '/backend/publicaciones/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_publicaciones_create;
                        }

                        return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::createAction',  '_route' => 'publicaciones_create',);
                    }
                    not_publicaciones_create:

                    // publicaciones_edit
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_edit')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::editAction',));
                    }

                    // publicaciones_update
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_publicaciones_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_update')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::updateAction',));
                    }
                    not_publicaciones_update:

                    // publicaciones_delete
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_publicaciones_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::deleteAction',));
                    }
                    not_publicaciones_delete:

                    // publicaciones_galeria
                    if (0 === strpos($pathinfo, '/backend/publicaciones/galeria') && preg_match('#^/backend/publicaciones/galeria/(?P<categoria>[^/]++)/(?P<isActive>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_galeria')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::galeriaAction',));
                    }

                    // publicaciones_ordenar
                    if ($pathinfo === '/backend/publicaciones/ordenar') {
                        return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::ordenarGaleriaAction',  '_route' => 'publicaciones_ordenar',);
                    }

                    // publicaciones_up
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicaciones_up;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_up')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::upAction',));
                    }
                    not_publicaciones_up:

                    // publicaciones_down
                    if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicaciones_down;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_down')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriasPublicacionController::downAction',));
                    }
                    not_publicaciones_down:

                }

                // publicacion
                if (rtrim($pathinfo, '/') === '/backend/publicacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publicacion');
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::indexAction',  '_route' => 'publicacion',);
                }

                // publicacion_seleccionar_categoria
                if ($pathinfo === '/backend/publicacion/seleccionar/categoria') {
                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::selectAction',  '_route' => 'publicacion_seleccionar_categoria',);
                }

                // publicacion_por_categoria
                if (0 === strpos($pathinfo, '/backend/publicacion/list') && preg_match('#^/backend/publicacion/list/(?P<categoria>[^/]++)/categoria$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_por_categoria')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::porCategoriaAction',));
                }

                // publicacion_show
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_show')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::showAction',));
                }

                // publicacion_new
                if ($pathinfo === '/backend/publicacion/new') {
                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::newAction',  '_route' => 'publicacion_new',);
                }

                // publicacion_create
                if ($pathinfo === '/backend/publicacion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicacion_create;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::createAction',  '_route' => 'publicacion_create',);
                }
                not_publicacion_create:

                // publicacion_edit
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_edit')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::editAction',));
                }

                // publicacion_update
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_update')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::updateAction',));
                }
                not_publicacion_update:

                // publicacion_delete
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::deleteAction',));
                }
                not_publicacion_delete:

                // publicacion_up
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion_up;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_up')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::upAction',));
                }
                not_publicacion_up:

                // publicacion_down
                if (preg_match('#^/backend/publicacion/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion_down;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_down')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::downAction',));
                }
                not_publicacion_down:

            }

            if (0 === strpos($pathinfo, '/backend/configuraciones')) {
                // configuraciones
                if (rtrim($pathinfo, '/') === '/backend/configuraciones') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'configuraciones');
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::indexAction',  '_route' => 'configuraciones',);
                }

                // configuraciones_select
                if ($pathinfo === '/backend/configuraciones/seleccionar') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::selectAction',  '_route' => 'configuraciones_select',);
                }

                // configuraciones_show
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_show')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::showAction',));
                }

                // configuraciones_new
                if ($pathinfo === '/backend/configuraciones/new') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::newAction',  '_route' => 'configuraciones_new',);
                }

                // configuraciones_create
                if ($pathinfo === '/backend/configuraciones/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_create;
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::createAction',  '_route' => 'configuraciones_create',);
                }
                not_configuraciones_create:

                // configuraciones_edit
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_edit')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::editAction',));
                }

                // configuraciones_update
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_update')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::updateAction',));
                }
                not_configuraciones_update:

                // configuraciones_delete
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_delete')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::deleteAction',));
                }
                not_configuraciones_delete:

            }

            // backend_homepage
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_homepage');
                }

                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_homepage',);
            }

            // backend_navegar
            if ($pathinfo === '/backend/navegar') {
                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::navegarAction',  '_route' => 'backend_navegar',);
            }

            // backend_categorias
            if ($pathinfo === '/backend/seleccionar/galeria') {
                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::categoriasAction',  '_route' => 'backend_categorias',);
            }

            if (0 === strpos($pathinfo, '/backend/galeria')) {
                // backend_galerias_principal
                if ($pathinfo === '/backend/galeria/principal') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::galeriaPrincipalAction',  '_route' => 'backend_galerias_principal',);
                }

                // backend_galerias_about
                if ($pathinfo === '/backend/galeria/about') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::galeriaAboutAction',  '_route' => 'backend_galerias_about',);
                }

                // backend_galerias_distribuidores
                if ($pathinfo === '/backend/galeria/distribuidores') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::galeriaDistribuidoresAction',  '_route' => 'backend_galerias_distribuidores',);
                }

                // backend_galerias_howtomix
                if ($pathinfo === '/backend/galeria/howtomix') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::galeriaHowToMixAction',  '_route' => 'backend_galerias_howtomix',);
                }

            }

            // backend_configuraciones
            if ($pathinfo === '/backend/configuraciones') {
                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::configuracionesAction',  '_route' => 'backend_configuraciones',);
            }

            // publicaciones_about
            if ($pathinfo === '/backend/publicacion/about') {
                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::publicacionesAboutAction',  '_route' => 'publicaciones_about',);
            }

            if (0 === strpos($pathinfo, '/backend/where/to/find')) {
                // publicaciones_wheretofindmexico
                if ($pathinfo === '/backend/where/to/find/mexico') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::whereToFindMexicoAction',  '_route' => 'publicaciones_wheretofindmexico',);
                }

                // publicaciones_wheretofindusa
                if ($pathinfo === '/backend/where/to/find/usa') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::whereToFindUsaAction',  '_route' => 'publicaciones_wheretofindusa',);
                }

                // publicaciones_wheretofinddistribuidores
                if ($pathinfo === '/backend/where/to/find/distribuidores') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::whereToFindDistribuidoresAction',  '_route' => 'publicaciones_wheretofinddistribuidores',);
                }

            }

            if (0 === strpos($pathinfo, '/backend/log')) {
                if (0 === strpos($pathinfo, '/backend/login')) {
                    // backend_login
                    if ($pathinfo === '/backend/login') {
                        return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::loginAction',  '_route' => 'backend_login',);
                    }

                    // backend_check
                    if ($pathinfo === '/backend/login_check') {
                        return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::securityCheckAction',  '_route' => 'backend_check',);
                    }

                }

                // backend_logout
                if ($pathinfo === '/backend/logout') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'backend_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/media/cache')) {
            // _imagine_platillos_imagen
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_platillos_imagen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_platillos_imagen')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'platillos_imagen',));
            }
            not__imagine_platillos_imagen:

            // _imagine_galeria_imagen
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_galeria_imagen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_galeria_imagen')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'galeria_imagen',));
            }
            not__imagine_galeria_imagen:

            // _imagine_galeria_imagen_recortar
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_galeria_imagen_recortar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_galeria_imagen_recortar')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'galeria_imagen_recortar',));
            }
            not__imagine_galeria_imagen_recortar:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
