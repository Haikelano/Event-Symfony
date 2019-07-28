<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7dbbc2e70c3c155590f285fd6d68b4b57b0d092e0a803b85c36050285c274e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1986be844521ceafacd6250db29d94425659fde53a752326fe628e9728fa7ea = $this->env->getExtension("native_profiler");
        $__internal_b1986be844521ceafacd6250db29d94425659fde53a752326fe628e9728fa7ea->enter($__internal_b1986be844521ceafacd6250db29d94425659fde53a752326fe628e9728fa7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1986be844521ceafacd6250db29d94425659fde53a752326fe628e9728fa7ea->leave($__internal_b1986be844521ceafacd6250db29d94425659fde53a752326fe628e9728fa7ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94af9532bb97799d26e2b46d3ae77e4862ee06272c313e4b5cf3290b1fa9a652 = $this->env->getExtension("native_profiler");
        $__internal_94af9532bb97799d26e2b46d3ae77e4862ee06272c313e4b5cf3290b1fa9a652->enter($__internal_94af9532bb97799d26e2b46d3ae77e4862ee06272c313e4b5cf3290b1fa9a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94af9532bb97799d26e2b46d3ae77e4862ee06272c313e4b5cf3290b1fa9a652->leave($__internal_94af9532bb97799d26e2b46d3ae77e4862ee06272c313e4b5cf3290b1fa9a652_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35cef7b87be4ad5ec2ddf350df7b95844143615cf55610155f7aa6b53c35056d = $this->env->getExtension("native_profiler");
        $__internal_35cef7b87be4ad5ec2ddf350df7b95844143615cf55610155f7aa6b53c35056d->enter($__internal_35cef7b87be4ad5ec2ddf350df7b95844143615cf55610155f7aa6b53c35056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35cef7b87be4ad5ec2ddf350df7b95844143615cf55610155f7aa6b53c35056d->leave($__internal_35cef7b87be4ad5ec2ddf350df7b95844143615cf55610155f7aa6b53c35056d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aeac130db9af262c3333a24c685c01433edd7ef278aa23882c7bb04971a2448 = $this->env->getExtension("native_profiler");
        $__internal_4aeac130db9af262c3333a24c685c01433edd7ef278aa23882c7bb04971a2448->enter($__internal_4aeac130db9af262c3333a24c685c01433edd7ef278aa23882c7bb04971a2448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4aeac130db9af262c3333a24c685c01433edd7ef278aa23882c7bb04971a2448->leave($__internal_4aeac130db9af262c3333a24c685c01433edd7ef278aa23882c7bb04971a2448_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
