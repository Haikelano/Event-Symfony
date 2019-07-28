<?php

/* base.html.twig */
class __TwigTemplate_5d4610741b58997ffcbe1f4be2259576588f4ef53f24561d2c07988cd36f9639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10d0d300ebf90e064146fc54176f2fd48a2f8f16d839605a6d86d6b2cd387361 = $this->env->getExtension("native_profiler");
        $__internal_10d0d300ebf90e064146fc54176f2fd48a2f8f16d839605a6d86d6b2cd387361->enter($__internal_10d0d300ebf90e064146fc54176f2fd48a2f8f16d839605a6d86d6b2cd387361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_10d0d300ebf90e064146fc54176f2fd48a2f8f16d839605a6d86d6b2cd387361->leave($__internal_10d0d300ebf90e064146fc54176f2fd48a2f8f16d839605a6d86d6b2cd387361_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f68a0919a724020537963373bc21f2149a73feea3f0d31473b872b00eb0c77a = $this->env->getExtension("native_profiler");
        $__internal_8f68a0919a724020537963373bc21f2149a73feea3f0d31473b872b00eb0c77a->enter($__internal_8f68a0919a724020537963373bc21f2149a73feea3f0d31473b872b00eb0c77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f68a0919a724020537963373bc21f2149a73feea3f0d31473b872b00eb0c77a->leave($__internal_8f68a0919a724020537963373bc21f2149a73feea3f0d31473b872b00eb0c77a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef13efb3f91ee7320b766af09c68cf71a66baeb906ffeb3a1b482378d433472b = $this->env->getExtension("native_profiler");
        $__internal_ef13efb3f91ee7320b766af09c68cf71a66baeb906ffeb3a1b482378d433472b->enter($__internal_ef13efb3f91ee7320b766af09c68cf71a66baeb906ffeb3a1b482378d433472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ef13efb3f91ee7320b766af09c68cf71a66baeb906ffeb3a1b482378d433472b->leave($__internal_ef13efb3f91ee7320b766af09c68cf71a66baeb906ffeb3a1b482378d433472b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5df9ea0a9fce88a8f9f3a9e183ecb8983e937e707862f36f21cef13b1c19981d = $this->env->getExtension("native_profiler");
        $__internal_5df9ea0a9fce88a8f9f3a9e183ecb8983e937e707862f36f21cef13b1c19981d->enter($__internal_5df9ea0a9fce88a8f9f3a9e183ecb8983e937e707862f36f21cef13b1c19981d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5df9ea0a9fce88a8f9f3a9e183ecb8983e937e707862f36f21cef13b1c19981d->leave($__internal_5df9ea0a9fce88a8f9f3a9e183ecb8983e937e707862f36f21cef13b1c19981d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d1538374dd740aee528d21b2870f5badc18f14ff685f016f9c49ce706699aa0 = $this->env->getExtension("native_profiler");
        $__internal_4d1538374dd740aee528d21b2870f5badc18f14ff685f016f9c49ce706699aa0->enter($__internal_4d1538374dd740aee528d21b2870f5badc18f14ff685f016f9c49ce706699aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4d1538374dd740aee528d21b2870f5badc18f14ff685f016f9c49ce706699aa0->leave($__internal_4d1538374dd740aee528d21b2870f5badc18f14ff685f016f9c49ce706699aa0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
