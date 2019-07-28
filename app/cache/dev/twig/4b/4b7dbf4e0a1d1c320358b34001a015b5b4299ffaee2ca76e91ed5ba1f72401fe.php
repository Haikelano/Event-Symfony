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
        $__internal_59e87b52b96661fa100d728b9836fd85b56bc4804b7d59aa7bd4fbd72dbef020 = $this->env->getExtension("native_profiler");
        $__internal_59e87b52b96661fa100d728b9836fd85b56bc4804b7d59aa7bd4fbd72dbef020->enter($__internal_59e87b52b96661fa100d728b9836fd85b56bc4804b7d59aa7bd4fbd72dbef020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e87b52b96661fa100d728b9836fd85b56bc4804b7d59aa7bd4fbd72dbef020->leave($__internal_59e87b52b96661fa100d728b9836fd85b56bc4804b7d59aa7bd4fbd72dbef020_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63135b4257db8e4e70a5b2f8f6316bdee299bc69ce6d96255659c2ac80e6133e = $this->env->getExtension("native_profiler");
        $__internal_63135b4257db8e4e70a5b2f8f6316bdee299bc69ce6d96255659c2ac80e6133e->enter($__internal_63135b4257db8e4e70a5b2f8f6316bdee299bc69ce6d96255659c2ac80e6133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63135b4257db8e4e70a5b2f8f6316bdee299bc69ce6d96255659c2ac80e6133e->leave($__internal_63135b4257db8e4e70a5b2f8f6316bdee299bc69ce6d96255659c2ac80e6133e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f618dfe52308c590d077bf911931838831475f099aa30bddae618d344a37c4d = $this->env->getExtension("native_profiler");
        $__internal_1f618dfe52308c590d077bf911931838831475f099aa30bddae618d344a37c4d->enter($__internal_1f618dfe52308c590d077bf911931838831475f099aa30bddae618d344a37c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f618dfe52308c590d077bf911931838831475f099aa30bddae618d344a37c4d->leave($__internal_1f618dfe52308c590d077bf911931838831475f099aa30bddae618d344a37c4d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_647d5eced51982c0f91d4d8d234e59e4b5859b7ef257311fb2204dd6f308f005 = $this->env->getExtension("native_profiler");
        $__internal_647d5eced51982c0f91d4d8d234e59e4b5859b7ef257311fb2204dd6f308f005->enter($__internal_647d5eced51982c0f91d4d8d234e59e4b5859b7ef257311fb2204dd6f308f005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_647d5eced51982c0f91d4d8d234e59e4b5859b7ef257311fb2204dd6f308f005->leave($__internal_647d5eced51982c0f91d4d8d234e59e4b5859b7ef257311fb2204dd6f308f005_prof);

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
