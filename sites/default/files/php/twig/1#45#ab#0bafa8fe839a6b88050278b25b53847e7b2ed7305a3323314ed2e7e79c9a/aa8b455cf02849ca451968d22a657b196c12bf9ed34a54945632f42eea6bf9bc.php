<?php

/* core/modules/system/templates/table.html.twig */
class __TwigTemplate_45ab0bafa8fe839a6b88050278b25b53847e7b2ed7305a3323314ed2e7e79c9a extends Twig_Template
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
        // line 40
        echo "<table";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 41
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 42
            echo "    <caption>";
            echo twig_drupal_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "</caption>
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 46
            echo "    ";
            if ($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "cols")) {
                // line 47
                echo "      <colgroup";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "attributes"), "html", null, true);
                echo ">
        ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "cols"));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 49
                    echo "          <col";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "attributes"), "html", null, true);
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "      </colgroup>
    ";
            } else {
                // line 53
                echo "      <colgroup";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "attributes"), "html", null, true);
                echo " />
    ";
            }
            // line 55
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
  ";
        // line 57
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 58
            echo "    <thead>
      <tr>
        ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 61
                echo "          <";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "attributes"), "html", null, true);
                echo ">";
                // line 62
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "content"), "html", null, true);
                // line 63
                echo "</";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      </tr>
    </thead>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 70
            echo "    <tbody>
      ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 72
                echo "        <tr";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"), "html", null, true);
                echo ">
          ";
                // line 73
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "cells"));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 74
                    echo "            <";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "attributes"), "html", null, true);
                    echo ">";
                    // line 75
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "content"), "html", null, true);
                    // line 76
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    </tbody>
  ";
        }
        // line 82
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 83
            echo "    <tfoot>
      ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 85
                echo "        <tr";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"), "html", null, true);
                echo ">
          ";
                // line 86
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "cells"));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 87
                    echo "            <";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "attributes"), "html", null, true);
                    echo ">";
                    // line 88
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "content"), "html", null, true);
                    // line 89
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "    </tfoot>
  ";
        }
        // line 95
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 68,  105 => 65,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 58,  79 => 57,  76 => 56,  70 => 55,  64 => 53,  60 => 51,  51 => 49,  47 => 48,  42 => 47,  39 => 46,  35 => 45,  32 => 44,  26 => 42,  24 => 41,  19 => 40,);
    }
}
