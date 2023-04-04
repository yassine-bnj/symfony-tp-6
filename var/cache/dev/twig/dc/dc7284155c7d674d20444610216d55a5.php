<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* articles/index.html.twig */
class __TwigTemplate_b806f315aff442493609461095b8027a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "<table id=\"articles\" class=\"table table-striped\">
<thead>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>Catégorie</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 16
                echo "<tr>
<td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
<td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
<td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 19), "titre", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
<td>
<a href=\"/article/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" class=\"btn btn-dark\">Détails</a>
<a href=\"/article/edit/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" class=\"btn btn-dark\">Modifier</a>
<a href=\"/article/delete/";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\" class=\"btn btn-danger\"
onclick=\"return confirm('Etes-vous sûr de supprimer cet article?');\">Supprimer</a>
</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</tbody>
</table>
";
        } else {
            // line 31
            echo "<p>Aucun articles</p>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  126 => 28,  115 => 23,  111 => 22,  107 => 21,  102 => 19,  98 => 18,  94 => 17,  91 => 16,  87 => 15,  75 => 5,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%} Liste des Articles{% endblock %}
{% block body %}
{% if articles %}
<table id=\"articles\" class=\"table table-striped\">
<thead>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>Catégorie</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
{% for article in articles %}
<tr>
<td>{{ article.nom }}</td>
<td>{{ article.prix }}</td>
<td>{{ article.category.titre }}</td>
<td>
<a href=\"/article/{{ article.id }}\" class=\"btn btn-dark\">Détails</a>
<a href=\"/article/edit/{{ article.id }}\" class=\"btn btn-dark\">Modifier</a>
<a href=\"/article/delete/{{ article.id }}\" class=\"btn btn-danger\"
onclick=\"return confirm('Etes-vous sûr de supprimer cet article?');\">Supprimer</a>
</td>
</tr>
{% endfor %}
</tbody>
</table>
{% else %}
<p>Aucun articles</p>
{% endif %}
{% endblock %}", "articles/index.html.twig", "/var/www/html/tp6/templates/articles/index.html.twig");
    }
}
