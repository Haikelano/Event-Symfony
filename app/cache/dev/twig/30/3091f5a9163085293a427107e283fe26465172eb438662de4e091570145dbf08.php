<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_6544179478723f34711e58da4c7df1ca8de1a1caf854d06aff3320f00a9e00dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4e2974af5fbd90a5f6d7a7f4dec31f03e9e6dd82641701d55a3200275c5c9fb = $this->env->getExtension("native_profiler");
        $__internal_f4e2974af5fbd90a5f6d7a7f4dec31f03e9e6dd82641701d55a3200275c5c9fb->enter($__internal_f4e2974af5fbd90a5f6d7a7f4dec31f03e9e6dd82641701d55a3200275c5c9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f4e2974af5fbd90a5f6d7a7f4dec31f03e9e6dd82641701d55a3200275c5c9fb->leave($__internal_f4e2974af5fbd90a5f6d7a7f4dec31f03e9e6dd82641701d55a3200275c5c9fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
