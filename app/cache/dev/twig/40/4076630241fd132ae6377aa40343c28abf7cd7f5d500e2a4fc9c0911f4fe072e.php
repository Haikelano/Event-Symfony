<?php

/* conference/index.html.twig */
class __TwigTemplate_10577ae1d6a059fc73d5ffef1995f8e45726d8bcd8acfd9d58d80d88d1ccac3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conference/index.html.twig", 1);
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
        $__internal_725ac9ef8b6c55ab393edb170ee3073ee75200285ef353cbbd4b0d2d3a019ea9 = $this->env->getExtension("native_profiler");
        $__internal_725ac9ef8b6c55ab393edb170ee3073ee75200285ef353cbbd4b0d2d3a019ea9->enter($__internal_725ac9ef8b6c55ab393edb170ee3073ee75200285ef353cbbd4b0d2d3a019ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725ac9ef8b6c55ab393edb170ee3073ee75200285ef353cbbd4b0d2d3a019ea9->leave($__internal_725ac9ef8b6c55ab393edb170ee3073ee75200285ef353cbbd4b0d2d3a019ea9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe049e640bbc4c8dc82009908f93eebfffacef8be2a4247b36ac2759b9e8515 = $this->env->getExtension("native_profiler");
        $__internal_7fe049e640bbc4c8dc82009908f93eebfffacef8be2a4247b36ac2759b9e8515->enter($__internal_7fe049e640bbc4c8dc82009908f93eebfffacef8be2a4247b36ac2759b9e8515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Conference list</h1>

    <table>
        <thead>
            <tr>
                <th>Idconference</th>
                <th>Title</th>
                <th>Text</th>
                <th>Job</th>
                <th>Company</th>
                <th>Context</th>
                <th>Startdate</th>
                <th>Finishdate</th>
                <th>Description</th>
                <th>Resume</th>
                <th>Topics</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conferences"]) ? $context["conferences"] : $this->getContext($context, "conferences")));
        foreach ($context['_seq'] as $context["_key"] => $context["conference"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conference_show", array("id" => $this->getAttribute($context["conference"], "idconference", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "idconference", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "job", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "context", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["conference"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["conference"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["conference"], "finishdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["conference"], "finishdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["conference"], "topics", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conference_show", array("id" => $this->getAttribute($context["conference"], "idconference", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conference_edit", array("id" => $this->getAttribute($context["conference"], "idconference", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("conference_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7fe049e640bbc4c8dc82009908f93eebfffacef8be2a4247b36ac2759b9e8515->leave($__internal_7fe049e640bbc4c8dc82009908f93eebfffacef8be2a4247b36ac2759b9e8515_prof);

    }

    public function getTemplateName()
    {
        return "conference/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  140 => 49,  128 => 43,  122 => 40,  115 => 36,  111 => 35,  107 => 34,  101 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Conference list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idconference</th>*/
/*                 <th>Title</th>*/
/*                 <th>Text</th>*/
/*                 <th>Job</th>*/
/*                 <th>Company</th>*/
/*                 <th>Context</th>*/
/*                 <th>Startdate</th>*/
/*                 <th>Finishdate</th>*/
/*                 <th>Description</th>*/
/*                 <th>Resume</th>*/
/*                 <th>Topics</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for conference in conferences %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('conference_show', { 'id': conference.idconference }) }}">{{ conference.idconference }}</a></td>*/
/*                 <td>{{ conference.title }}</td>*/
/*                 <td>{{ conference.text }}</td>*/
/*                 <td>{{ conference.job }}</td>*/
/*                 <td>{{ conference.company }}</td>*/
/*                 <td>{{ conference.context }}</td>*/
/*                 <td>{% if conference.startdate %}{{ conference.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if conference.finishdate %}{{ conference.finishdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ conference.description }}</td>*/
/*                 <td>{{ conference.resume }}</td>*/
/*                 <td>{{ conference.topics }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('conference_show', { 'id': conference.idconference }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('conference_edit', { 'id': conference.idconference }) }}">edit</a>*/
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
/*             <a href="{{ path('conference_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
