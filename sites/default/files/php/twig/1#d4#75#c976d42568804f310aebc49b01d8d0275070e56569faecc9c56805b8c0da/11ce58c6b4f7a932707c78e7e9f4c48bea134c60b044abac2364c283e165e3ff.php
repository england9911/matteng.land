<?php

/* core/modules/system/templates/menu-tree.html.twig */
class __TwigTemplate_d475c976d42568804f310aebc49b01d8d0275070e56569faecc9c56805b8c0da extends Twig_Template
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
        // line 29
        if ((isset($context["tree"]) ? $context["tree"] : null)) {
            // line 30
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 31
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 32
                    echo "<";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo ">";
                } else {
                    // line 34
                    echo "<h2";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 37
            echo "<ul";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    ";
            // line 38
            echo twig_drupal_escape_filter($this->env, (isset($context["tree"]) ? $context["tree"] : null), "html", null, true);
            echo "
  </ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 38,  35 => 34,  25 => 32,  368 => 211,  362 => 208,  359 => 207,  357 => 206,  354 => 205,  348 => 202,  344 => 201,  340 => 200,  336 => 199,  333 => 198,  331 => 197,  326 => 194,  320 => 191,  316 => 190,  312 => 189,  309 => 188,  307 => 187,  302 => 184,  296 => 181,  293 => 180,  291 => 179,  288 => 178,  282 => 175,  279 => 174,  277 => 173,  271 => 170,  266 => 169,  260 => 166,  257 => 165,  255 => 164,  250 => 163,  244 => 160,  239 => 159,  237 => 158,  232 => 157,  226 => 154,  223 => 153,  221 => 152,  217 => 151,  214 => 150,  208 => 149,  202 => 146,  198 => 144,  192 => 141,  189 => 140,  187 => 139,  184 => 138,  178 => 135,  175 => 134,  173 => 133,  169 => 131,  163 => 128,  159 => 127,  150 => 123,  148 => 122,  140 => 119,  136 => 117,  130 => 114,  123 => 113,  121 => 112,  118 => 111,  115 => 110,  105 => 107,  98 => 106,  95 => 105,  85 => 101,  77 => 99,  74 => 98,  72 => 97,  65 => 96,  63 => 95,  60 => 94,  45 => 90,  40 => 88,  34 => 85,  31 => 84,  29 => 83,  23 => 31,  26 => 25,  21 => 30,  155 => 126,  149 => 90,  146 => 89,  143 => 120,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 91,  46 => 48,  43 => 37,  41 => 46,  36 => 45,  30 => 43,  28 => 42,  24 => 41,  19 => 29,);
    }
}
