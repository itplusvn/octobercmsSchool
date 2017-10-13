<?php

/* E:\xampp7\htdocs\thptyd3/themes/kenshin/layouts/default.htm */
class __TwigTemplate_41c6416b95df6aa0f71251739c6c4431c2145d161fa4b9666eb5848de0a6fd2d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/normalize.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/icomoon.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/prettyPhoto.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.carousel.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.theme.default.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/transitions.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/main.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/color.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/responsive.css");
        echo "\">
        <script src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js");
        echo "\"></script>
        ";
        // line 26
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 27
        echo "    </head>
    <body>

        <!-- Header -->
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
        <!-- Content -->
            ";
        // line 34
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 35
        echo "
        <!-- Footer -->
            ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
        <!-- Scripts -->
        <script src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery-library.js");
        echo "\"></script>
        <script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mapclustering/data.json");
        echo "\"></script>
        <script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en\"></script>
        <script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mapclustering/markerclusterer.min.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mapclustering/infobox.js");
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mapclustering/map.js");
        echo "\"></script>
        <script src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/isotope.pkgd.js");
        echo "\"></script>
        <script src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/prettyPhoto.js");
        echo "\"></script>
        <script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/countdown.js");
        echo "\"></script>
        <script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/collapse.js");
        echo "\"></script>
        <script src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/moment.js");
        echo "\"></script>
        <script src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/gmap3.js");
        echo "\"></script>
        <script src=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\thptyd3/themes/kenshin/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  177 => 53,  173 => 52,  169 => 51,  165 => 50,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  136 => 42,  132 => 41,  128 => 40,  124 => 38,  120 => 37,  116 => 35,  114 => 34,  110 => 32,  106 => 31,  100 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/normalize.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/icomoon.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/prettyPhoto.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.default.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/transitions.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/color.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'|theme }}\">
        <script src=\"{{ 'assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'|theme }}\"></script>
        {% styles %}
    </head>
    <body>

        <!-- Header -->
            {% partial 'header' %}

        <!-- Content -->
            {% page %}

        <!-- Footer -->
            {% partial 'footer' %}

        <!-- Scripts -->
        <script src=\"{{'assets/js/vendor/jquery-library.js'|theme }}\"></script>
        <script src=\"{{'assets/js/vendor/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/data.json'|theme }}\"></script>
        <script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en\"></script>
        <script src=\"{{'assets/js/mapclustering/markerclusterer.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/infobox.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/map.js'|theme }}\"></script>
        <script src=\"{{'assets/js/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/isotope.pkgd.js'|theme }}\"></script>
        <script src=\"{{'assets/js/prettyPhoto.js'|theme }}\"></script>
        <script src=\"{{'assets/js/countdown.js'|theme }}\"></script>
        <script src=\"{{'assets/js/collapse.js'|theme }}\"></script>
        <script src=\"{{'assets/js/moment.js'|theme }}\"></script>
        <script src=\"{{'assets/js/gmap3.js'|theme }}\"></script>
        <script src=\"{{'assets/js/main.js'|theme }}\"></script>

    </body>
</html>", "E:\\xampp7\\htdocs\\thptyd3/themes/kenshin/layouts/default.htm", "");
    }
}
