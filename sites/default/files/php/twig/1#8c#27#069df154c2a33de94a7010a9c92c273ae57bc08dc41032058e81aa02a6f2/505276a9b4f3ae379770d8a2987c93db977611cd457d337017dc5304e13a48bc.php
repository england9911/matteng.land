<?php

/* core/themes/seven/templates/tablesort-indicator.html.twig */
class __TwigTemplate_8c27069df154c2a33de94a7010a9c92c273ae57bc08dc41032058e81aa02a6f2 extends Twig_Template
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
        // line 12
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 13
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_asc"]) ? $context["arrow_asc"] : null), "html", null, true);
            echo "\" width=\"9\" height=\"5\" alt=\"";
            echo twig_render_var(t("Sort ascending"));
            echo "\" title=\"";
            echo twig_render_var(t("Sort ascending"));
            echo "\" />
";
        } else {
            // line 15
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_desc"]) ? $context["arrow_desc"] : null), "html", null, true);
            echo "\" width=\"9\" height=\"5\" alt=\"";
            echo twig_render_var(t("Sort descending"));
            echo "\" title=\"";
            echo twig_render_var(t("Sort descending"));
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 15,  21 => 13,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 26,  36 => 24,  34 => 23,  32 => 22,  25 => 20,  23 => 19,  19 => 12,);
    }
}
