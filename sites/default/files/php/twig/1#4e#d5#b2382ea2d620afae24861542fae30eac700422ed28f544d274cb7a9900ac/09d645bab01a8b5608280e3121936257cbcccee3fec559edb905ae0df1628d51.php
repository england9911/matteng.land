<?php

/* core/modules/system/templates/admin-block.html.twig */
class __TwigTemplate_4ed5b2382ea2d620afae24861542fae30eac700422ed28f544d274cb7a9900ac extends Twig_Template
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
        // line 17
        echo "<div class=\"admin-panel\">
  ";
        // line 18
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title")) {
            // line 19
            echo "    <h3>";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title"), "html", null, true);
            echo "</h3>
  ";
        }
        // line 21
        echo "  ";
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content")) {
            // line 22
            echo "    <div class=\"body\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content"), "html", null, true);
            echo "</div>
  ";
        } elseif ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description")) {
            // line 24
            echo "    <div class=\"description\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description"), "html", null, true);
            echo "</div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 26,  39 => 24,  24 => 19,  53 => 26,  46 => 24,  37 => 22,  33 => 22,  30 => 21,  26 => 19,  22 => 18,  19 => 17,);
    }
}
