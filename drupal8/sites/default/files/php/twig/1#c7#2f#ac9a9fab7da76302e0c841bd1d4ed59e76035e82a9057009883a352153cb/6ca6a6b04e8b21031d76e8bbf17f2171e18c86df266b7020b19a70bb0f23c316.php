<?php

/* core/modules/system/templates/feed-icon.html.twig */
class __TwigTemplate_c72fac9a9fab7da76302e0c841bd1d4ed59e76035e82a9057009883a352153cb extends Twig_Template
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
        // line 18
        echo "<a href=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 52,  49 => 52,  20 => 44,  42 => 19,  33 => 17,  68 => 41,  51 => 55,  39 => 49,  32 => 29,  48 => 35,  35 => 34,  25 => 45,  368 => 211,  362 => 208,  359 => 207,  357 => 206,  354 => 205,  348 => 202,  344 => 201,  340 => 200,  336 => 199,  333 => 198,  331 => 197,  326 => 194,  320 => 191,  316 => 190,  312 => 189,  309 => 188,  307 => 187,  302 => 184,  296 => 181,  293 => 180,  291 => 179,  288 => 178,  282 => 175,  279 => 174,  277 => 173,  271 => 170,  266 => 169,  260 => 166,  257 => 165,  255 => 164,  250 => 163,  244 => 160,  239 => 159,  237 => 158,  232 => 157,  226 => 154,  223 => 153,  221 => 152,  217 => 151,  214 => 150,  208 => 149,  202 => 146,  198 => 144,  192 => 141,  189 => 140,  187 => 139,  184 => 138,  178 => 135,  175 => 134,  173 => 133,  169 => 131,  163 => 128,  159 => 127,  150 => 123,  148 => 122,  140 => 119,  136 => 117,  130 => 114,  123 => 113,  121 => 112,  118 => 111,  115 => 110,  105 => 107,  98 => 106,  95 => 105,  85 => 101,  77 => 44,  74 => 43,  72 => 97,  65 => 96,  63 => 95,  60 => 53,  45 => 51,  40 => 88,  34 => 85,  31 => 47,  29 => 46,  23 => 27,  26 => 25,  21 => 13,  155 => 126,  149 => 90,  146 => 89,  143 => 120,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 46,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 39,  58 => 53,  55 => 37,  52 => 91,  46 => 48,  43 => 37,  41 => 46,  36 => 31,  30 => 28,  28 => 42,  24 => 14,  19 => 18,);
    }
}
