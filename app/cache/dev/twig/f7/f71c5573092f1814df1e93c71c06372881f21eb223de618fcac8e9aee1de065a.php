<?php

/* actuality/index.html.twig */
class __TwigTemplate_8e144b61288f78921ffe7b786b03930fafd800a1f193a5d8527b515acdd030eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actuality/index.html.twig", 1);
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
        $__internal_46d971c1b04fc89210f8ead563811efe505060fae343a19ac0e90718ca53ce8c = $this->env->getExtension("native_profiler");
        $__internal_46d971c1b04fc89210f8ead563811efe505060fae343a19ac0e90718ca53ce8c->enter($__internal_46d971c1b04fc89210f8ead563811efe505060fae343a19ac0e90718ca53ce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actuality/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d971c1b04fc89210f8ead563811efe505060fae343a19ac0e90718ca53ce8c->leave($__internal_46d971c1b04fc89210f8ead563811efe505060fae343a19ac0e90718ca53ce8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aef515e788b36b56245262b116952b46bead11ba29fd9836bfd544b35e5e96c1 = $this->env->getExtension("native_profiler");
        $__internal_aef515e788b36b56245262b116952b46bead11ba29fd9836bfd544b35e5e96c1->enter($__internal_aef515e788b36b56245262b116952b46bead11ba29fd9836bfd544b35e5e96c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actuality list</h1>

    <table>
        <thead>
            <tr>
                <th>Idactuality</th>
                <th>Title</th>
                <th>Resume</th>
                <th>Datecreate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualities"]) ? $context["actualities"] : $this->getContext($context, "actualities")));
        foreach ($context['_seq'] as $context["_key"] => $context["actuality"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actuality_show", array("id" => $this->getAttribute($context["actuality"], "idactuality", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actuality"], "idactuality", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["actuality"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["actuality"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["actuality"], "datecreate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actuality"], "datecreate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actuality_show", array("id" => $this->getAttribute($context["actuality"], "idactuality", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actuality_edit", array("id" => $this->getAttribute($context["actuality"], "idactuality", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actuality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("actuality_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_aef515e788b36b56245262b116952b46bead11ba29fd9836bfd544b35e5e96c1->leave($__internal_aef515e788b36b56245262b116952b46bead11ba29fd9836bfd544b35e5e96c1_prof);

    }

    public function getTemplateName()
    {
        return "actuality/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Actuality list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idactuality</th>*/
/*                 <th>Title</th>*/
/*                 <th>Resume</th>*/
/*                 <th>Datecreate</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for actuality in actualities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('actuality_show', { 'id': actuality.idactuality }) }}">{{ actuality.idactuality }}</a></td>*/
/*                 <td>{{ actuality.title }}</td>*/
/*                 <td>{{ actuality.resume }}</td>*/
/*                 <td>{% if actuality.datecreate %}{{ actuality.datecreate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('actuality_show', { 'id': actuality.idactuality }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('actuality_edit', { 'id': actuality.idactuality }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('actuality_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
