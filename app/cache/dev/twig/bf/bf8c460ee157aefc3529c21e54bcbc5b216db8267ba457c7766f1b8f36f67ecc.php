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
        $__internal_e1dcb1d34baddea74f67847568e023d3addce75757bdfe17c399e7de89e25cc5 = $this->env->getExtension("native_profiler");
        $__internal_e1dcb1d34baddea74f67847568e023d3addce75757bdfe17c399e7de89e25cc5->enter($__internal_e1dcb1d34baddea74f67847568e023d3addce75757bdfe17c399e7de89e25cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e1dcb1d34baddea74f67847568e023d3addce75757bdfe17c399e7de89e25cc5->leave($__internal_e1dcb1d34baddea74f67847568e023d3addce75757bdfe17c399e7de89e25cc5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dac941182a22c5caf9619f664f22fd81b1fb791158920b7d00a2bc4c1d6a1768 = $this->env->getExtension("native_profiler");
        $__internal_dac941182a22c5caf9619f664f22fd81b1fb791158920b7d00a2bc4c1d6a1768->enter($__internal_dac941182a22c5caf9619f664f22fd81b1fb791158920b7d00a2bc4c1d6a1768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dac941182a22c5caf9619f664f22fd81b1fb791158920b7d00a2bc4c1d6a1768->leave($__internal_dac941182a22c5caf9619f664f22fd81b1fb791158920b7d00a2bc4c1d6a1768_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af79c0918d50cb2ba1627472b2a86545d79fb329e61333525cfe6318ee99f0ff = $this->env->getExtension("native_profiler");
        $__internal_af79c0918d50cb2ba1627472b2a86545d79fb329e61333525cfe6318ee99f0ff->enter($__internal_af79c0918d50cb2ba1627472b2a86545d79fb329e61333525cfe6318ee99f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af79c0918d50cb2ba1627472b2a86545d79fb329e61333525cfe6318ee99f0ff->leave($__internal_af79c0918d50cb2ba1627472b2a86545d79fb329e61333525cfe6318ee99f0ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15a1c009d1f8236941a1d9c0cca94bd40e57c2220af0b46c728a7029eb170f70 = $this->env->getExtension("native_profiler");
        $__internal_15a1c009d1f8236941a1d9c0cca94bd40e57c2220af0b46c728a7029eb170f70->enter($__internal_15a1c009d1f8236941a1d9c0cca94bd40e57c2220af0b46c728a7029eb170f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15a1c009d1f8236941a1d9c0cca94bd40e57c2220af0b46c728a7029eb170f70->leave($__internal_15a1c009d1f8236941a1d9c0cca94bd40e57c2220af0b46c728a7029eb170f70_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3365239f520571b58e6866909df20e5a5459f39b3362a6faf384be5a911f3949 = $this->env->getExtension("native_profiler");
        $__internal_3365239f520571b58e6866909df20e5a5459f39b3362a6faf384be5a911f3949->enter($__internal_3365239f520571b58e6866909df20e5a5459f39b3362a6faf384be5a911f3949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3365239f520571b58e6866909df20e5a5459f39b3362a6faf384be5a911f3949->leave($__internal_3365239f520571b58e6866909df20e5a5459f39b3362a6faf384be5a911f3949_prof);

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
