<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_95fda2d13c5f7fcac8ef65b19fa67a831794be6ffae9034387ec6b91ed8a4441 extends Twig_Template
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
        // line 25
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  <nav";
        // line 26
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </nav>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"), "html", null, true);
            echo ">
    ";
            // line 35
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 36
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"), "html", null, true);
                echo "\">
          <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 37
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"), "html", null, true);
                echo "</h3>
    ";
            } else {
                // line 39
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
    ";
            }
            // line 41
            echo "        ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"), "html", null, true);
            echo "
      </nav>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 45
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["remainder"]) ? $context["remainder"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  62 => 35,  54 => 33,  50 => 32,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  57 => 34,  55 => 49,  51 => 48,  47 => 31,  43 => 46,  35 => 43,  25 => 41,  23 => 40,  21 => 39,  19 => 25,);
    }
}
