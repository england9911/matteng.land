<?php

/* core/modules/system/templates/admin-page.html.twig */
class __TwigTemplate_a0054e7e2b2ab0ad54549559d9c7dd3f0f7b980f52a84d3b4a57d1d023e4ad18 extends Twig_Template
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
        echo "<div class=\"admin clearfix\">
  ";
        // line 18
        echo twig_drupal_escape_filter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true);
        echo "
  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 20
            echo "    <div class=\"layout-column half clearfix\">
      ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["container"]) ? $context["container"] : null), "blocks"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 22
                echo "        ";
                echo twig_drupal_escape_filter($this->env, (isset($context["block"]) ? $context["block"] : null), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 26,  46 => 24,  37 => 22,  33 => 21,  30 => 20,  26 => 19,  22 => 18,  19 => 17,);
    }
}
