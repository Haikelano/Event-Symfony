<?php

/* contact/index.html.twig */
class __TwigTemplate_b2a60f3ad9a8b05359efa11eeafde50366e44f7baa23b07e22d0cdd3a382c356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_00e6404beeea6298cc2dbd0dadfa816ca7b400e3bfc0b61584319148d54deb60 = $this->env->getExtension("native_profiler");
        $__internal_00e6404beeea6298cc2dbd0dadfa816ca7b400e3bfc0b61584319148d54deb60->enter($__internal_00e6404beeea6298cc2dbd0dadfa816ca7b400e3bfc0b61584319148d54deb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e6404beeea6298cc2dbd0dadfa816ca7b400e3bfc0b61584319148d54deb60->leave($__internal_00e6404beeea6298cc2dbd0dadfa816ca7b400e3bfc0b61584319148d54deb60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d213d62d7db2980c6ebb864eed8f1d6b07ac30237738c742146a556271cfc361 = $this->env->getExtension("native_profiler");
        $__internal_d213d62d7db2980c6ebb864eed8f1d6b07ac30237738c742146a556271cfc361->enter($__internal_d213d62d7db2980c6ebb864eed8f1d6b07ac30237738c742146a556271cfc361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcontact</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>Phone</th>
                <th>Lastname</th>
                <th>Civility</th>
                <th>Istreated</th>
                <th>Companyadress</th>
                <th>Companyphone</th>
                <th>Companymail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "idcontact", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "idcontact", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["contact"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "civility", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["contact"], "istreated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "companyadress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "companyphone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "companymail", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "idcontact", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "idcontact", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d213d62d7db2980c6ebb864eed8f1d6b07ac30237738c742146a556271cfc361->leave($__internal_d213d62d7db2980c6ebb864eed8f1d6b07ac30237738c742146a556271cfc361_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  152 => 53,  140 => 47,  134 => 44,  127 => 40,  123 => 39,  119 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  71 => 28,  68 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idcontact</th>*/
/*                 <th>Name</th>*/
/*                 <th>Email</th>*/
/*                 <th>Subject</th>*/
/*                 <th>Message</th>*/
/*                 <th>Date</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Civility</th>*/
/*                 <th>Istreated</th>*/
/*                 <th>Companyadress</th>*/
/*                 <th>Companyphone</th>*/
/*                 <th>Companymail</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contact in contacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contact_show', { 'id': contact.idcontact }) }}">{{ contact.idcontact }}</a></td>*/
/*                 <td>{{ contact.name }}</td>*/
/*                 <td>{{ contact.email }}</td>*/
/*                 <td>{{ contact.subject }}</td>*/
/*                 <td>{{ contact.message }}</td>*/
/*                 <td>{% if contact.date %}{{ contact.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ contact.phone }}</td>*/
/*                 <td>{{ contact.lastname }}</td>*/
/*                 <td>{{ contact.civility }}</td>*/
/*                 <td>{% if contact.istreated %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ contact.companyadress }}</td>*/
/*                 <td>{{ contact.companyphone }}</td>*/
/*                 <td>{{ contact.companymail }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_show', { 'id': contact.idcontact }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_edit', { 'id': contact.idcontact }) }}">edit</a>*/
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
/*             <a href="{{ path('contact_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
