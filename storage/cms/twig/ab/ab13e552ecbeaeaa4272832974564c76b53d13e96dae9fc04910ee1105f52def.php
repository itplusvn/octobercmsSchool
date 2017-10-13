<?php

/* E:\xampp7\htdocs\thptyd3/themes/kenshin/layouts/fallback.htm */
class __TwigTemplate_36f59df9b43ece754f82a73965f51dbad7573700b91a76da904449a196372448 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\thptyd3/themes/kenshin/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "E:\\xampp7\\htdocs\\thptyd3/themes/kenshin/layouts/fallback.htm", "");
    }
}
