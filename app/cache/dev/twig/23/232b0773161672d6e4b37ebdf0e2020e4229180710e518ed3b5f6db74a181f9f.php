<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cf3084b96d9c8aa52b83e3fc6bfdec4ece7e665721e80c343af1ce478c6b30b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f8d5d2ab4a138a1da4eb167b8259b686cfc78ce9cf33c99fd5b95d0ceb731c = $this->env->getExtension("native_profiler");
        $__internal_78f8d5d2ab4a138a1da4eb167b8259b686cfc78ce9cf33c99fd5b95d0ceb731c->enter($__internal_78f8d5d2ab4a138a1da4eb167b8259b686cfc78ce9cf33c99fd5b95d0ceb731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f8d5d2ab4a138a1da4eb167b8259b686cfc78ce9cf33c99fd5b95d0ceb731c->leave($__internal_78f8d5d2ab4a138a1da4eb167b8259b686cfc78ce9cf33c99fd5b95d0ceb731c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_210fe1525690f75de076d34105933ba34dc1aa9e1d36de79c3fe54fa592e91d2 = $this->env->getExtension("native_profiler");
        $__internal_210fe1525690f75de076d34105933ba34dc1aa9e1d36de79c3fe54fa592e91d2->enter($__internal_210fe1525690f75de076d34105933ba34dc1aa9e1d36de79c3fe54fa592e91d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_210fe1525690f75de076d34105933ba34dc1aa9e1d36de79c3fe54fa592e91d2->leave($__internal_210fe1525690f75de076d34105933ba34dc1aa9e1d36de79c3fe54fa592e91d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ba97c4ee0b82908b3e3b4b2adc80eb27198ffa5916a4046e05563e7f5a62979 = $this->env->getExtension("native_profiler");
        $__internal_2ba97c4ee0b82908b3e3b4b2adc80eb27198ffa5916a4046e05563e7f5a62979->enter($__internal_2ba97c4ee0b82908b3e3b4b2adc80eb27198ffa5916a4046e05563e7f5a62979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ba97c4ee0b82908b3e3b4b2adc80eb27198ffa5916a4046e05563e7f5a62979->leave($__internal_2ba97c4ee0b82908b3e3b4b2adc80eb27198ffa5916a4046e05563e7f5a62979_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b30411164a435e221be999c0051af2fd23a9341bb7d9373c308b088c0e744a9e = $this->env->getExtension("native_profiler");
        $__internal_b30411164a435e221be999c0051af2fd23a9341bb7d9373c308b088c0e744a9e->enter($__internal_b30411164a435e221be999c0051af2fd23a9341bb7d9373c308b088c0e744a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b30411164a435e221be999c0051af2fd23a9341bb7d9373c308b088c0e744a9e->leave($__internal_b30411164a435e221be999c0051af2fd23a9341bb7d9373c308b088c0e744a9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
