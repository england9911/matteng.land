<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_a279da0d0ae5700dee9304ebad0f3d32e9e11539efeec6c7915c95c56f946f65 extends Twig_Template
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
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  <div class=\"messages messages--";
            echo twig_drupal_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 28
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 29
                echo "      <div role=\"alert\">
    ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 32
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 34
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 35
                echo "        <ul class=\"messages__list\">
          ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </ul>
      ";
            } else {
                // line 41
                echo "        ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0), "html", null, true);
                echo "
      ";
            }
            // line 43
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 41,  51 => 36,  39 => 32,  32 => 29,  48 => 35,  35 => 34,  25 => 32,  368 => 211,  362 => 208,  359 => 207,  357 => 206,  354 => 205,  348 => 202,  344 => 201,  340 => 200,  336 => 199,  333 => 198,  331 => 197,  326 => 194,  320 => 191,  316 => 190,  312 => 189,  309 => 188,  307 => 187,  302 => 184,  296 => 181,  293 => 180,  291 => 179,  288 => 178,  282 => 175,  279 => 174,  277 => 173,  271 => 170,  266 => 169,  260 => 166,  257 => 165,  255 => 164,  250 => 163,  244 => 160,  239 => 159,  237 => 158,  232 => 157,  226 => 154,  223 => 153,  221 => 152,  217 => 151,  214 => 150,  208 => 149,  202 => 146,  198 => 144,  192 => 141,  189 => 140,  187 => 139,  184 => 138,  178 => 135,  175 => 134,  173 => 133,  169 => 131,  163 => 128,  159 => 127,  150 => 123,  148 => 122,  140 => 119,  136 => 117,  130 => 114,  123 => 113,  121 => 112,  118 => 111,  115 => 110,  105 => 107,  98 => 106,  95 => 105,  85 => 101,  77 => 44,  74 => 43,  72 => 97,  65 => 96,  63 => 95,  60 => 94,  45 => 34,  40 => 88,  34 => 85,  31 => 84,  29 => 83,  23 => 27,  26 => 25,  21 => 30,  155 => 126,  149 => 90,  146 => 89,  143 => 120,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 46,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 39,  58 => 53,  55 => 37,  52 => 91,  46 => 48,  43 => 37,  41 => 46,  36 => 31,  30 => 28,  28 => 42,  24 => 41,  19 => 26,);
    }
}
