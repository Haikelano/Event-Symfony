<?php

/* conference/new.html.twig */
class __TwigTemplate_dbe1a59930f0f38af7ea1cfc48ecbdbce6ae19db56acc8d6af7da398fdbfe244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conference/new.html.twig", 1);
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
        $__internal_5ca949a3676e29669dbb5dbef8a4c4b120c426985a0ad728fa7d79e43fb53814 = $this->env->getExtension("native_profiler");
        $__internal_5ca949a3676e29669dbb5dbef8a4c4b120c426985a0ad728fa7d79e43fb53814->enter($__internal_5ca949a3676e29669dbb5dbef8a4c4b120c426985a0ad728fa7d79e43fb53814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conference/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca949a3676e29669dbb5dbef8a4c4b120c426985a0ad728fa7d79e43fb53814->leave($__internal_5ca949a3676e29669dbb5dbef8a4c4b120c426985a0ad728fa7d79e43fb53814_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d8026d9899eb9dfbd758499b0bfb5fad6cc61c559c7414ddd5981f193e97e87 = $this->env->getExtension("native_profiler");
        $__internal_3d8026d9899eb9dfbd758499b0bfb5fad6cc61c559c7414ddd5981f193e97e87->enter($__internal_3d8026d9899eb9dfbd758499b0bfb5fad6cc61c559c7414ddd5981f193e97e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Conference creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("conference_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3d8026d9899eb9dfbd758499b0bfb5fad6cc61c559c7414ddd5981f193e97e87->leave($__internal_3d8026d9899eb9dfbd758499b0bfb5fad6cc61c559c7414ddd5981f193e97e87_prof);

    }

    public function getTemplateName()
    {
        return "conference/new.html.twig";
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
/*     <h1>Conference creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('conference_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
