<?php

/* themes/customAdmin_lte_theme/templates/navigation/menu.html.twig */
class __TwigTemplate_fcee6877ff880633d6c245216b051e4c0e37733ecc7a6cac7af231ef550443c1 extends Twig_Template
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
        $tags = array("import" => 16, "macro" => 24, "if" => 27, "for" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
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

        // line 16
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 24
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "  ";
            $context["menus"] = $this;
            // line 26
            echo "  
  ";
            // line 27
            if (($context["items"] ?? null)) {
                // line 28
                echo "    ";
                if ((($context["menu_level"] ?? null) != 0)) {
                    // line 29
                    echo "      <ul class=\"treeview-menu\">
    ";
                }
                // line 31
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 32
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 33
                        echo "        <li class=\"treeview\">
      ";
                    } else {
                        // line 35
                        echo "        <li>
      ";
                    }
                    // line 37
                    echo "          <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">
            <i class=\"fa ";
                    // line 38
                    if ($this->getAttribute($context["item"], "icon", array())) {
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true));
                    } else {
                        echo "fa-circle-o";
                    }
                    echo "\"></i>
            <span>";
                    // line 39
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</span>
            ";
                    // line 40
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 41
                        echo "              <i class=\"fa fa-angle-left pull-right\"></i>
            ";
                    }
                    // line 43
                    echo "          </a>
          ";
                    // line 44
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 45
                        echo "            ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
          ";
                    }
                    // line 47
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "    ";
                if ((($context["menu_level"] ?? null) != 0)) {
                    // line 50
                    echo "      </ul>
    ";
                }
                // line 52
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/customAdmin_lte_theme/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  144 => 50,  141 => 49,  134 => 47,  128 => 45,  126 => 44,  123 => 43,  119 => 41,  117 => 40,  113 => 39,  105 => 38,  100 => 37,  96 => 35,  92 => 33,  89 => 32,  84 => 31,  80 => 29,  77 => 28,  75 => 27,  72 => 26,  69 => 25,  55 => 24,  48 => 22,  45 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/customAdmin_lte_theme/templates/navigation/menu.html.twig", "C:\\laragon\\www\\super8\\themes\\customAdmin_lte_theme\\templates\\navigation\\menu.html.twig");
    }
}
