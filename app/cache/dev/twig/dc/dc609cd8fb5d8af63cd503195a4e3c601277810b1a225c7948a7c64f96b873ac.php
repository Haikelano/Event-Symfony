<?php

/* contact/new.html.twig */
class __TwigTemplate_58f7172a6a8f03082a652483988c2f3713cea0391c28a7b6e31804b61d4ab879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8329909f6ae9b4367c335ef8175ddbf0e066b47728076d638d4b9b3c92f9f3d = $this->env->getExtension("native_profiler");
        $__internal_e8329909f6ae9b4367c335ef8175ddbf0e066b47728076d638d4b9b3c92f9f3d->enter($__internal_e8329909f6ae9b4367c335ef8175ddbf0e066b47728076d638d4b9b3c92f9f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8329909f6ae9b4367c335ef8175ddbf0e066b47728076d638d4b9b3c92f9f3d->leave($__internal_e8329909f6ae9b4367c335ef8175ddbf0e066b47728076d638d4b9b3c92f9f3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daecb79af7897eeefd05684c91d386f8390e089b27edf00af517e1290343552a = $this->env->getExtension("native_profiler");
        $__internal_daecb79af7897eeefd05684c91d386f8390e089b27edf00af517e1290343552a->enter($__internal_daecb79af7897eeefd05684c91d386f8390e089b27edf00af517e1290343552a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_daecb79af7897eeefd05684c91d386f8390e089b27edf00af517e1290343552a->leave($__internal_daecb79af7897eeefd05684c91d386f8390e089b27edf00af517e1290343552a_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
