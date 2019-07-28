<?php

/* actuality/new.html.twig */
class __TwigTemplate_343504f16c45ae9fc2936bf1f7cd47040af6a2076b55e8581c3aec6cd81ca8a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actuality/new.html.twig", 1);
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
        $__internal_62ca78aab487d4146551cc50609088d5f4c9df5e43ff4da3b60ded7f67a0fb2e = $this->env->getExtension("native_profiler");
        $__internal_62ca78aab487d4146551cc50609088d5f4c9df5e43ff4da3b60ded7f67a0fb2e->enter($__internal_62ca78aab487d4146551cc50609088d5f4c9df5e43ff4da3b60ded7f67a0fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actuality/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62ca78aab487d4146551cc50609088d5f4c9df5e43ff4da3b60ded7f67a0fb2e->leave($__internal_62ca78aab487d4146551cc50609088d5f4c9df5e43ff4da3b60ded7f67a0fb2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a7aae722f412e37198f68f174c0d854d2896a2b2e5e53657afc8eead9bc220 = $this->env->getExtension("native_profiler");
        $__internal_d0a7aae722f412e37198f68f174c0d854d2896a2b2e5e53657afc8eead9bc220->enter($__internal_d0a7aae722f412e37198f68f174c0d854d2896a2b2e5e53657afc8eead9bc220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actuality creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("actuality_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d0a7aae722f412e37198f68f174c0d854d2896a2b2e5e53657afc8eead9bc220->leave($__internal_d0a7aae722f412e37198f68f174c0d854d2896a2b2e5e53657afc8eead9bc220_prof);

    }

    public function getTemplateName()
    {
        return "actuality/new.html.twig";
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
/*     <h1>Actuality creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('actuality_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
