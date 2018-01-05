<?php

/* index.html.twig */
class __TwigTemplate_1335502507bfdcbdb70ba62bfcbba20bf58a93d45f1b3424e8fb1da8d9398a1e extends Twig_Template
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
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Users/nicolas.aube95/PhpstormProjects/tp_composer/templates/index.html.twig");
    }
}
