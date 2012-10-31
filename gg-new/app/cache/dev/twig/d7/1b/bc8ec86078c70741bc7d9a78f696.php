<?php

/* ggDefaultBundle:Party:index.html.twig */
class __TwigTemplate_d71bbc8ec86078c70741bc7d9a78f696 extends Twig_Template
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
        // line 1
        echo "<h1>Party list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Start</th>
            <th>End</th>
            <th>Place</th>
            <th>Host</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_show", array("id" => twig_template_get_attributes($this, $this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "Name"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if (twig_template_get_attributes($this, $this->getContext($context, "entity"), "Start")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "Start"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 21
            if (twig_template_get_attributes($this, $this->getContext($context, "entity"), "End")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "End"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "Place"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $this->getContext($context, "entity"), "Host"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_show", array("id" => twig_template_get_attributes($this, $this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_edit", array("id" => twig_template_get_attributes($this, $this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ggDefaultBundle:Party:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  92 => 36,  80 => 30,  74 => 27,  67 => 23,  63 => 22,  57 => 21,  51 => 20,  47 => 19,  41 => 18,  38 => 17,  34 => 16,  17 => 1,);
    }
}
