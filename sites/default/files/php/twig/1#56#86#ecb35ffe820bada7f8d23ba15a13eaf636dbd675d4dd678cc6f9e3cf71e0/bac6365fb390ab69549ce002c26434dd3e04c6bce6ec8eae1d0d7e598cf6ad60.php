<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_5686ecb35ffe820bada7f8d23ba15a13eaf636dbd675d4dd678cc6f9e3cf71e0 extends Twig_Template
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
        // line 66
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"layout-container\">
      ";
        // line 68
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 69
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 70
            echo "        <h1 class=\"page-title\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 72
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
      ";
        // line 73
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 74
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true);
            echo "
      ";
        }
        // line 76
        echo "    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 80
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 81
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true);
            echo "</div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 88
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 89
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
            echo "</div>
      ";
        }
        // line 91
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 92
            echo "        <div id=\"help\">
          ";
            // line 93
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 96
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 97
            echo "        <ul class=\"action-links\">
          ";
            // line 98
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 101
        echo "      ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\" class=\"layout-column\">
      ";
        // line 105
        echo twig_drupal_escape_filter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 89,  72 => 88,  65 => 84,  62 => 83,  56 => 81,  54 => 80,  48 => 76,  42 => 74,  40 => 73,  35 => 72,  29 => 70,  27 => 69,  23 => 68,  43 => 24,  21 => 20,  45 => 26,  39 => 24,  24 => 19,  53 => 26,  46 => 24,  37 => 22,  33 => 22,  30 => 22,  26 => 21,  22 => 18,  19 => 66,);
    }
}
