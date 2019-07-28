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
        $__internal_192d167cf3f370e2a3402140c9e894615a6aa170479c384d03d98a415f37a8f6 = $this->env->getExtension("native_profiler");
        $__internal_192d167cf3f370e2a3402140c9e894615a6aa170479c384d03d98a415f37a8f6->enter($__internal_192d167cf3f370e2a3402140c9e894615a6aa170479c384d03d98a415f37a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actuality/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192d167cf3f370e2a3402140c9e894615a6aa170479c384d03d98a415f37a8f6->leave($__internal_192d167cf3f370e2a3402140c9e894615a6aa170479c384d03d98a415f37a8f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f782de83a8e0355790d17c0dcbcb63c7eaed8139760c36f23a3ebbb737ef1a6b = $this->env->getExtension("native_profiler");
        $__internal_f782de83a8e0355790d17c0dcbcb63c7eaed8139760c36f23a3ebbb737ef1a6b->enter($__internal_f782de83a8e0355790d17c0dcbcb63c7eaed8139760c36f23a3ebbb737ef1a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f782de83a8e0355790d17c0dcbcb63c7eaed8139760c36f23a3ebbb737ef1a6b->leave($__internal_f782de83a8e0355790d17c0dcbcb63c7eaed8139760c36f23a3ebbb737ef1a6b_prof);

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
