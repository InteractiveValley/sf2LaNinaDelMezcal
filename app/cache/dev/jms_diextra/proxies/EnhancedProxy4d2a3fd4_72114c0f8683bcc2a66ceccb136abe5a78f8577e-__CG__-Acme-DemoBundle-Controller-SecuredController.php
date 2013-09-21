<?php

namespace EnhancedProxy4d2a3fd4_bf01225b5add9a4980cd996c61cce121ee58aced\__CG__\Acme\DemoBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class SecuredController extends \EnhancedProxy4d2a3fd4_72114c0f8683bcc2a66ceccb136abe5a78f8577e\__CG__\Acme\DemoBundle\Controller\SecuredController
{
    private $__CGInterception__loader;

    public function helloadminAction($name)
    {
        $ref = new \ReflectionMethod('Acme\\DemoBundle\\Controller\\SecuredController', 'helloadminAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}