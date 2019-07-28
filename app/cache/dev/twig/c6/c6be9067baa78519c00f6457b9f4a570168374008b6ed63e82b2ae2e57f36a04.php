<?php

/* actuality/show.html.twig */
class __TwigTemplate_3e54a5e30800d86696cc1aa2e0497358604dbcdcdb78dac85453bf37ed6596c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actuality/show.html.twig", 1);
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
        $__internal_de8dc2188c8589573988319ec13cbe6492e539c76a4fb31da1c23823b53c4293 = $this->env->getExtension("native_profiler");
        $__internal_de8dc2188c8589573988319ec13cbe6492e539c76a4fb31da1c23823b53c4293->enter($__internal_de8dc2188c8589573988319ec13cbe6492e539c76a4fb31da1c23823b53c4293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actuality/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8dc2188c8589573988319ec13cbe6492e539c76a4fb31da1c23823b53c4293->leave($__internal_de8dc2188c8589573988319ec13cbe6492e539c76a4fb31da1c23823b53c4293_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44312b9478c58ef7f54b3f8290563b76d1fdf1ad267e632685d560ef42ca94a8 = $this->env->getExtension("native_profiler");
        $__internal_44312b9478c58ef7f54b3f8290563b76d1fdf1ad267e632685d560ef42ca94a8->enter($__internal_44312b9478c58ef7f54b3f8290563b76d1fdf1ad267e632685d560ef42ca94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actuality</h1>

    <table>
        <tbody>
            <tr>
                <th>Idactuality</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "idactuality", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "resume", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "datecreate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "datecreate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("actuality_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actuality_edit", array("id" => $this->getAttribute((isset($context["actuality"]) ? $context["actuality"] : $this->getContext($context, "actuality")), "idactuality", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_44312b9478c58ef7f54b3f8290563b76d1fdf1ad267e632685d560ef42ca94a8->leave($__internal_44312b9478c58ef7f54b3f8290563b76d1fdf1ad267e632685d560ef42ca94a8_prof);

    }

    public function getTemplateName()
    {
        return "actuality/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Actuality</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idactuality</th>*/
/*                 <td>{{ actuality.idactuality }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ actuality.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resume</th>*/
/*                 <td>{{ actuality.resume }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreate</th>*/
/*                 <td>{% if actuality.datecreate %}{{ actuality.datecreate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('actuality_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('actuality_edit', { 'id': actuality.idactuality }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
