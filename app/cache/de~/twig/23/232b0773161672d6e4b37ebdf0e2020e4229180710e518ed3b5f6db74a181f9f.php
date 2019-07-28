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
        $__internal_88f2463c69d564b950c0e85e72dc0727732a73b5cbba50c34f893a553eeb4cbc = $this->env->getExtension("native_profiler");
        $__internal_88f2463c69d564b950c0e85e72dc0727732a73b5cbba50c34f893a553eeb4cbc->enter($__internal_88f2463c69d564b950c0e85e72dc0727732a73b5cbba50c34f893a553eeb4cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f2463c69d564b950c0e85e72dc0727732a73b5cbba50c34f893a553eeb4cbc->leave($__internal_88f2463c69d564b950c0e85e72dc0727732a73b5cbba50c34f893a553eeb4cbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b372c120110d8b8974f66038a70aa4489240fe28d87eb0194c94b3c4101ea7ad = $this->env->getExtension("native_profiler");
        $__internal_b372c120110d8b8974f66038a70aa4489240fe28d87eb0194c94b3c4101ea7ad->enter($__internal_b372c120110d8b8974f66038a70aa4489240fe28d87eb0194c94b3c4101ea7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b372c120110d8b8974f66038a70aa4489240fe28d87eb0194c94b3c4101ea7ad->leave($__internal_b372c120110d8b8974f66038a70aa4489240fe28d87eb0194c94b3c4101ea7ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fd36168c9d7de6c0ea89923452ce420c1af9b7183e9a972bb3fb08a0f99ba82 = $this->env->getExtension("native_profiler");
        $__internal_1fd36168c9d7de6c0ea89923452ce420c1af9b7183e9a972bb3fb08a0f99ba82->enter($__internal_1fd36168c9d7de6c0ea89923452ce420c1af9b7183e9a972bb3fb08a0f99ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fd36168c9d7de6c0ea89923452ce420c1af9b7183e9a972bb3fb08a0f99ba82->leave($__internal_1fd36168c9d7de6c0ea89923452ce420c1af9b7183e9a972bb3fb08a0f99ba82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23c05a85b6fdf289982cf1e62c0cf42b1d4254a58c04132d974666a3443c9f9c = $this->env->getExtension("native_profiler");
        $__internal_23c05a85b6fdf289982cf1e62c0cf42b1d4254a58c04132d974666a3443c9f9c->enter($__internal_23c05a85b6fdf289982cf1e62c0cf42b1d4254a58c04132d974666a3443c9f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23c05a85b6fdf289982cf1e62c0cf42b1d4254a58c04132d974666a3443c9f9c->leave($__internal_23c05a85b6fdf289982cf1e62c0cf42b1d4254a58c04132d974666a3443c9f9c_prof);

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
