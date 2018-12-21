<?php

/* themes/customAdmin_lte_theme/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_08b12985af3e9903d84d7ebaa02d4b169fbe4a9bac77e7edb1839cd789bb1fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 37, "block" => 41);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 35
        echo "<ul class=\"sidebar-menu\">
  ";
        // line 37
        echo "  ";
        if ($this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 38
            echo "    <li class=\"header\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
            echo "</h2>
  ";
        }
        // line 40
        echo "  ";
        // line 41
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "</ul>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/customAdmin_lte_theme/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 42,  66 => 41,  61 => 44,  58 => 41,  56 => 40,  50 => 38,  47 => 37,  44 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/customAdmin_lte_theme/templates/block/block--system-menu-block.html.twig", "C:\\laragon\\www\\super8\\themes\\customAdmin_lte_theme\\templates\\block\\block--system-menu-block.html.twig");
    }
}
