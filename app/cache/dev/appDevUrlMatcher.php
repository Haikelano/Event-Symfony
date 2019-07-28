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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/actuality')) {
            // actuality_index
            if (rtrim($pathinfo, '/') === '/actuality') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actuality_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actuality_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\ActualityController::indexAction',  '_route' => 'actuality_index',);
            }
            not_actuality_index:

            // actuality_new
            if ($pathinfo === '/actuality/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actuality_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\ActualityController::newAction',  '_route' => 'actuality_new',);
            }
            not_actuality_new:

            // actuality_show
            if (preg_match('#^/actuality/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actuality_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actuality_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ActualityController::showAction',));
            }
            not_actuality_show:

            // actuality_edit
            if (preg_match('#^/actuality/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actuality_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actuality_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ActualityController::editAction',));
            }
            not_actuality_edit:

            // actuality_delete
            if (preg_match('#^/actuality/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actuality_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actuality_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ActualityController::deleteAction',));
            }
            not_actuality_delete:

        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/con')) {
                if (0 === strpos($pathinfo, '/conference')) {
                    // conference_index
                    if (rtrim($pathinfo, '/') === '/conference') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_conference_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'conference_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ConferenceController::indexAction',  '_route' => 'conference_index',);
                    }
                    not_conference_index:

                    // conference_new
                    if ($pathinfo === '/conference/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_conference_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ConferenceController::newAction',  '_route' => 'conference_new',);
                    }
                    not_conference_new:

                    // conference_show
                    if (preg_match('#^/conference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_conference_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conference_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ConferenceController::showAction',));
                    }
                    not_conference_show:

                    // conference_edit
                    if (preg_match('#^/conference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_conference_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conference_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ConferenceController::editAction',));
                    }
                    not_conference_edit:

                    // conference_delete
                    if (preg_match('#^/conference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_conference_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conference_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ConferenceController::deleteAction',));
                    }
                    not_conference_delete:

                }

                if (0 === strpos($pathinfo, '/contact')) {
                    // contact_index
                    if (rtrim($pathinfo, '/') === '/contact') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contact_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'contact_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact_index',);
                    }
                    not_contact_index:

                    // contact_new
                    if ($pathinfo === '/contact/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_contact_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ContactController::newAction',  '_route' => 'contact_new',);
                    }
                    not_contact_new:

                    // contact_show
                    if (preg_match('#^/contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contact_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ContactController::showAction',));
                    }
                    not_contact_show:

                    // contact_edit
                    if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_contact_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ContactController::editAction',));
                    }
                    not_contact_edit:

                    // contact_delete
                    if (preg_match('#^/contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_contact_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ContactController::deleteAction',));
                    }
                    not_contact_delete:

                }

            }

            if (0 === strpos($pathinfo, '/country')) {
                // country_index
                if (rtrim($pathinfo, '/') === '/country') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_country_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'country_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\CountryController::indexAction',  '_route' => 'country_index',);
                }
                not_country_index:

                // country_new
                if ($pathinfo === '/country/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_country_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
                }
                not_country_new:

                // country_show
                if (preg_match('#^/country/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_country_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\CountryController::showAction',));
                }
                not_country_show:

                // country_edit
                if (preg_match('#^/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_country_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\CountryController::editAction',));
                }
                not_country_edit:

                // country_delete
                if (preg_match('#^/country/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\CountryController::deleteAction',));
                }
                not_country_delete:

            }

        }

        // website_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'website_default_index');
            }

            return array (  '_controller' => 'WebsiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'website_default_index',);
        }

        if (0 === strpos($pathinfo, '/detailplanning')) {
            // detailplanning_index
            if (rtrim($pathinfo, '/') === '/detailplanning') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_detailplanning_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'detailplanning_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\DetailPlanningController::indexAction',  '_route' => 'detailplanning_index',);
            }
            not_detailplanning_index:

            // detailplanning_new
            if ($pathinfo === '/detailplanning/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_detailplanning_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\DetailPlanningController::newAction',  '_route' => 'detailplanning_new',);
            }
            not_detailplanning_new:

            // detailplanning_show
            if (preg_match('#^/detailplanning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_detailplanning_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailplanning_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\DetailPlanningController::showAction',));
            }
            not_detailplanning_show:

            // detailplanning_edit
            if (preg_match('#^/detailplanning/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_detailplanning_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailplanning_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\DetailPlanningController::editAction',));
            }
            not_detailplanning_edit:

            // detailplanning_delete
            if (preg_match('#^/detailplanning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_detailplanning_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailplanning_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\DetailPlanningController::deleteAction',));
            }
            not_detailplanning_delete:

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event_index
            if (rtrim($pathinfo, '/') === '/event') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\EventController::indexAction',  '_route' => 'event_index',);
            }
            not_event_index:

            // event_new
            if ($pathinfo === '/event/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_event_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
            }
            not_event_new:

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventController::showAction',));
            }
            not_event_show:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_event_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventController::editAction',));
            }
            not_event_edit:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventController::deleteAction',));
            }
            not_event_delete:

            if (0 === strpos($pathinfo, '/eventgallery')) {
                // eventgallery_index
                if (rtrim($pathinfo, '/') === '/eventgallery') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eventgallery_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'eventgallery_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\EventGalleryController::indexAction',  '_route' => 'eventgallery_index',);
                }
                not_eventgallery_index:

                // eventgallery_new
                if ($pathinfo === '/eventgallery/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eventgallery_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\EventGalleryController::newAction',  '_route' => 'eventgallery_new',);
                }
                not_eventgallery_new:

                // eventgallery_show
                if (preg_match('#^/eventgallery/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eventgallery_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventgallery_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventGalleryController::showAction',));
                }
                not_eventgallery_show:

                // eventgallery_edit
                if (preg_match('#^/eventgallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eventgallery_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventgallery_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventGalleryController::editAction',));
                }
                not_eventgallery_edit:

                // eventgallery_delete
                if (preg_match('#^/eventgallery/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_eventgallery_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventgallery_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\EventGalleryController::deleteAction',));
                }
                not_eventgallery_delete:

            }

        }

        if (0 === strpos($pathinfo, '/hotel')) {
            // hotel_index
            if (rtrim($pathinfo, '/') === '/hotel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hotel_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hotel_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\HotelController::indexAction',  '_route' => 'hotel_index',);
            }
            not_hotel_index:

            // hotel_new
            if ($pathinfo === '/hotel/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\HotelController::newAction',  '_route' => 'hotel_new',);
            }
            not_hotel_new:

            // hotel_show
            if (preg_match('#^/hotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hotel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\HotelController::showAction',));
            }
            not_hotel_show:

            // hotel_edit
            if (preg_match('#^/hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\HotelController::editAction',));
            }
            not_hotel_edit:

            // hotel_delete
            if (preg_match('#^/hotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_hotel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\HotelController::deleteAction',));
            }
            not_hotel_delete:

        }

        if (0 === strpos($pathinfo, '/image')) {
            if (0 === strpos($pathinfo, '/imageactuality')) {
                // imageactuality_index
                if (rtrim($pathinfo, '/') === '/imageactuality') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imageactuality_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'imageactuality_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageActualityController::indexAction',  '_route' => 'imageactuality_index',);
                }
                not_imageactuality_index:

                // imageactuality_new
                if ($pathinfo === '/imageactuality/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imageactuality_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageActualityController::newAction',  '_route' => 'imageactuality_new',);
                }
                not_imageactuality_new:

                // imageactuality_show
                if (preg_match('#^/imageactuality/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imageactuality_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imageactuality_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageActualityController::showAction',));
                }
                not_imageactuality_show:

                // imageactuality_edit
                if (preg_match('#^/imageactuality/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imageactuality_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imageactuality_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageActualityController::editAction',));
                }
                not_imageactuality_edit:

                // imageactuality_delete
                if (preg_match('#^/imageactuality/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_imageactuality_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imageactuality_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageActualityController::deleteAction',));
                }
                not_imageactuality_delete:

            }

            if (0 === strpos($pathinfo, '/imagecountry')) {
                // imagecountry_index
                if (rtrim($pathinfo, '/') === '/imagecountry') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imagecountry_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'imagecountry_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageCountryController::indexAction',  '_route' => 'imagecountry_index',);
                }
                not_imagecountry_index:

                // imagecountry_new
                if ($pathinfo === '/imagecountry/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imagecountry_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageCountryController::newAction',  '_route' => 'imagecountry_new',);
                }
                not_imagecountry_new:

                // imagecountry_show
                if (preg_match('#^/imagecountry/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imagecountry_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecountry_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageCountryController::showAction',));
                }
                not_imagecountry_show:

                // imagecountry_edit
                if (preg_match('#^/imagecountry/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imagecountry_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecountry_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageCountryController::editAction',));
                }
                not_imagecountry_edit:

                // imagecountry_delete
                if (preg_match('#^/imagecountry/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_imagecountry_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecountry_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageCountryController::deleteAction',));
                }
                not_imagecountry_delete:

            }

            if (0 === strpos($pathinfo, '/imagehotel')) {
                // imagehotel_index
                if (rtrim($pathinfo, '/') === '/imagehotel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imagehotel_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'imagehotel_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageHotelController::indexAction',  '_route' => 'imagehotel_index',);
                }
                not_imagehotel_index:

                // imagehotel_new
                if ($pathinfo === '/imagehotel/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imagehotel_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageHotelController::newAction',  '_route' => 'imagehotel_new',);
                }
                not_imagehotel_new:

                // imagehotel_show
                if (preg_match('#^/imagehotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imagehotel_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagehotel_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageHotelController::showAction',));
                }
                not_imagehotel_show:

                // imagehotel_edit
                if (preg_match('#^/imagehotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_imagehotel_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagehotel_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageHotelController::editAction',));
                }
                not_imagehotel_edit:

                // imagehotel_delete
                if (preg_match('#^/imagehotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_imagehotel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagehotel_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageHotelController::deleteAction',));
                }
                not_imagehotel_delete:

            }

            if (0 === strpos($pathinfo, '/imagesp')) {
                if (0 === strpos($pathinfo, '/imagespeaker')) {
                    // imagespeaker_index
                    if (rtrim($pathinfo, '/') === '/imagespeaker') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_imagespeaker_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'imagespeaker_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSpeakerController::indexAction',  '_route' => 'imagespeaker_index',);
                    }
                    not_imagespeaker_index:

                    // imagespeaker_new
                    if ($pathinfo === '/imagespeaker/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_imagespeaker_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSpeakerController::newAction',  '_route' => 'imagespeaker_new',);
                    }
                    not_imagespeaker_new:

                    // imagespeaker_show
                    if (preg_match('#^/imagespeaker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_imagespeaker_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagespeaker_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSpeakerController::showAction',));
                    }
                    not_imagespeaker_show:

                    // imagespeaker_edit
                    if (preg_match('#^/imagespeaker/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_imagespeaker_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagespeaker_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSpeakerController::editAction',));
                    }
                    not_imagespeaker_edit:

                    // imagespeaker_delete
                    if (preg_match('#^/imagespeaker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_imagespeaker_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagespeaker_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSpeakerController::deleteAction',));
                    }
                    not_imagespeaker_delete:

                }

                if (0 === strpos($pathinfo, '/imagesponsor')) {
                    // imagesponsor_index
                    if (rtrim($pathinfo, '/') === '/imagesponsor') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_imagesponsor_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'imagesponsor_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSponsorController::indexAction',  '_route' => 'imagesponsor_index',);
                    }
                    not_imagesponsor_index:

                    // imagesponsor_new
                    if ($pathinfo === '/imagesponsor/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_imagesponsor_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSponsorController::newAction',  '_route' => 'imagesponsor_new',);
                    }
                    not_imagesponsor_new:

                    // imagesponsor_show
                    if (preg_match('#^/imagesponsor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_imagesponsor_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagesponsor_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSponsorController::showAction',));
                    }
                    not_imagesponsor_show:

                    // imagesponsor_edit
                    if (preg_match('#^/imagesponsor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_imagesponsor_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagesponsor_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSponsorController::editAction',));
                    }
                    not_imagesponsor_edit:

                    // imagesponsor_delete
                    if (preg_match('#^/imagesponsor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_imagesponsor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagesponsor_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ImageSponsorController::deleteAction',));
                    }
                    not_imagesponsor_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // newsletter_index
            if (rtrim($pathinfo, '/') === '/newsletter') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newsletter_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'newsletter_index',);
            }
            not_newsletter_index:

            // newsletter_new
            if ($pathinfo === '/newsletter/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newsletter_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\NewsletterController::newAction',  '_route' => 'newsletter_new',);
            }
            not_newsletter_new:

            // newsletter_show
            if (preg_match('#^/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\NewsletterController::showAction',));
            }
            not_newsletter_show:

            // newsletter_edit
            if (preg_match('#^/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newsletter_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\NewsletterController::editAction',));
            }
            not_newsletter_edit:

            // newsletter_delete
            if (preg_match('#^/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_newsletter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\NewsletterController::deleteAction',));
            }
            not_newsletter_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/participant')) {
                // participant_index
                if (rtrim($pathinfo, '/') === '/participant') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_participant_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'participant_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ParticipantController::indexAction',  '_route' => 'participant_index',);
                }
                not_participant_index:

                // participant_new
                if ($pathinfo === '/participant/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_participant_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\ParticipantController::newAction',  '_route' => 'participant_new',);
                }
                not_participant_new:

                // participant_show
                if (preg_match('#^/participant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_participant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\ParticipantController::showAction',));
                }
                not_participant_show:

                // participant_edit
                if (preg_match('#^/participant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_participant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\ParticipantController::editAction',));
                }
                not_participant_edit:

                // participant_delete
                if (preg_match('#^/participant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_participant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\ParticipantController::deleteAction',));
                }
                not_participant_delete:

            }

            if (0 === strpos($pathinfo, '/planning')) {
                // planning_index
                if (rtrim($pathinfo, '/') === '/planning') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planning_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'planning_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\PlanningController::indexAction',  '_route' => 'planning_index',);
                }
                not_planning_index:

                // planning_new
                if ($pathinfo === '/planning/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_planning_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\PlanningController::newAction',  '_route' => 'planning_new',);
                }
                not_planning_new:

                // planning_show
                if (preg_match('#^/planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planning_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\PlanningController::showAction',));
                }
                not_planning_show:

                // planning_edit
                if (preg_match('#^/planning/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_planning_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\PlanningController::editAction',));
                }
                not_planning_edit:

                // planning_delete
                if (preg_match('#^/planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_planning_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\PlanningController::deleteAction',));
                }
                not_planning_delete:

            }

        }

        if (0 === strpos($pathinfo, '/question')) {
            // question_index
            if (rtrim($pathinfo, '/') === '/question') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_question_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'question_index');
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question_index',);
            }
            not_question_index:

            // question_new
            if ($pathinfo === '/question/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_question_new;
                }

                return array (  '_controller' => 'WebsiteBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
            }
            not_question_new:

            // question_show
            if (preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_question_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\QuestionController::showAction',));
            }
            not_question_show:

            // question_edit
            if (preg_match('#^/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_question_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\QuestionController::editAction',));
            }
            not_question_edit:

            // question_delete
            if (preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_question_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\QuestionController::deleteAction',));
            }
            not_question_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/slide')) {
                // slide_index
                if (rtrim($pathinfo, '/') === '/slide') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_slide_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'slide_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\SlideController::indexAction',  '_route' => 'slide_index',);
                }
                not_slide_index:

                // slide_new
                if ($pathinfo === '/slide/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_slide_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\SlideController::newAction',  '_route' => 'slide_new',);
                }
                not_slide_new:

                // slide_show
                if (preg_match('#^/slide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_slide_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'slide_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\SlideController::showAction',));
                }
                not_slide_show:

                // slide_edit
                if (preg_match('#^/slide/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_slide_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'slide_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\SlideController::editAction',));
                }
                not_slide_edit:

                // slide_delete
                if (preg_match('#^/slide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_slide_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'slide_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\SlideController::deleteAction',));
                }
                not_slide_delete:

            }

            if (0 === strpos($pathinfo, '/sp')) {
                if (0 === strpos($pathinfo, '/speaker')) {
                    // speaker_index
                    if (rtrim($pathinfo, '/') === '/speaker') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_speaker_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'speaker_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\SpeakerController::indexAction',  '_route' => 'speaker_index',);
                    }
                    not_speaker_index:

                    // speaker_new
                    if ($pathinfo === '/speaker/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_speaker_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\SpeakerController::newAction',  '_route' => 'speaker_new',);
                    }
                    not_speaker_new:

                    // speaker_show
                    if (preg_match('#^/speaker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_speaker_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'speaker_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\SpeakerController::showAction',));
                    }
                    not_speaker_show:

                    // speaker_edit
                    if (preg_match('#^/speaker/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_speaker_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'speaker_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\SpeakerController::editAction',));
                    }
                    not_speaker_edit:

                    // speaker_delete
                    if (preg_match('#^/speaker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_speaker_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'speaker_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\SpeakerController::deleteAction',));
                    }
                    not_speaker_delete:

                }

                if (0 === strpos($pathinfo, '/sponsor')) {
                    // sponsor_index
                    if (rtrim($pathinfo, '/') === '/sponsor') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sponsor_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sponsor_index');
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\SponsorController::indexAction',  '_route' => 'sponsor_index',);
                    }
                    not_sponsor_index:

                    // sponsor_new
                    if ($pathinfo === '/sponsor/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sponsor_new;
                        }

                        return array (  '_controller' => 'WebsiteBundle\\Controller\\SponsorController::newAction',  '_route' => 'sponsor_new',);
                    }
                    not_sponsor_new:

                    // sponsor_show
                    if (preg_match('#^/sponsor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sponsor_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sponsor_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\SponsorController::showAction',));
                    }
                    not_sponsor_show:

                    // sponsor_edit
                    if (preg_match('#^/sponsor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sponsor_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sponsor_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\SponsorController::editAction',));
                    }
                    not_sponsor_edit:

                    // sponsor_delete
                    if (preg_match('#^/sponsor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sponsor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sponsor_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\SponsorController::deleteAction',));
                    }
                    not_sponsor_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tag')) {
                // tag_index
                if (rtrim($pathinfo, '/') === '/tag') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tag_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\TagController::indexAction',  '_route' => 'tag_index',);
                }
                not_tag_index:

                // tag_new
                if ($pathinfo === '/tag/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tag_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
                }
                not_tag_new:

                // tag_show
                if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\TagController::showAction',));
                }
                not_tag_show:

                // tag_edit
                if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tag_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\TagController::editAction',));
                }
                not_tag_edit:

                // tag_delete
                if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tag_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\TagController::deleteAction',));
                }
                not_tag_delete:

            }

            if (0 === strpos($pathinfo, '/ticket')) {
                // ticket_index
                if (rtrim($pathinfo, '/') === '/ticket') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ticket_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ticket_index');
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_index',);
                }
                not_ticket_index:

                // ticket_new
                if ($pathinfo === '/ticket/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ticket_new;
                    }

                    return array (  '_controller' => 'WebsiteBundle\\Controller\\TicketController::newAction',  '_route' => 'ticket_new',);
                }
                not_ticket_new:

                // ticket_show
                if (preg_match('#^/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ticket_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_show')), array (  '_controller' => 'WebsiteBundle\\Controller\\TicketController::showAction',));
                }
                not_ticket_show:

                // ticket_edit
                if (preg_match('#^/ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ticket_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_edit')), array (  '_controller' => 'WebsiteBundle\\Controller\\TicketController::editAction',));
                }
                not_ticket_edit:

                // ticket_delete
                if (preg_match('#^/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ticket_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_delete')), array (  '_controller' => 'WebsiteBundle\\Controller\\TicketController::deleteAction',));
                }
                not_ticket_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
