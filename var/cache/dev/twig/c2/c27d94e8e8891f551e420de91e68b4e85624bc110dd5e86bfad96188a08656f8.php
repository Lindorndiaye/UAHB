<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a1c89b9f5307a50a473b939404ee2b073e3345b0e4917661848662fc87b20a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1c89b9f5307a50a473b939404ee2b073e3345b0e4917661848662fc87b20a2->enter($__internal_5a1c89b9f5307a50a473b939404ee2b073e3345b0e4917661848662fc87b20a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0d134b81509f694bccd99f3c27684cf8ca22b3d7ee35868245c73da1c95ede28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d134b81509f694bccd99f3c27684cf8ca22b3d7ee35868245c73da1c95ede28->enter($__internal_0d134b81509f694bccd99f3c27684cf8ca22b3d7ee35868245c73da1c95ede28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5a1c89b9f5307a50a473b939404ee2b073e3345b0e4917661848662fc87b20a2->leave($__internal_5a1c89b9f5307a50a473b939404ee2b073e3345b0e4917661848662fc87b20a2_prof);

        
        $__internal_0d134b81509f694bccd99f3c27684cf8ca22b3d7ee35868245c73da1c95ede28->leave($__internal_0d134b81509f694bccd99f3c27684cf8ca22b3d7ee35868245c73da1c95ede28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41094a835657f945dd88462b899b35fb2a9d851c038250cba39e87015d055de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41094a835657f945dd88462b899b35fb2a9d851c038250cba39e87015d055de1->enter($__internal_41094a835657f945dd88462b899b35fb2a9d851c038250cba39e87015d055de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ce907724f422532946e375ccfdfce0acc929dc828ffb6eee22f46fadad8e702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce907724f422532946e375ccfdfce0acc929dc828ffb6eee22f46fadad8e702->enter($__internal_6ce907724f422532946e375ccfdfce0acc929dc828ffb6eee22f46fadad8e702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ce907724f422532946e375ccfdfce0acc929dc828ffb6eee22f46fadad8e702->leave($__internal_6ce907724f422532946e375ccfdfce0acc929dc828ffb6eee22f46fadad8e702_prof);

        
        $__internal_41094a835657f945dd88462b899b35fb2a9d851c038250cba39e87015d055de1->leave($__internal_41094a835657f945dd88462b899b35fb2a9d851c038250cba39e87015d055de1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1421ade91a52b587b59d76089153476ce323d08262f22348d5d9a3965ed5c736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1421ade91a52b587b59d76089153476ce323d08262f22348d5d9a3965ed5c736->enter($__internal_1421ade91a52b587b59d76089153476ce323d08262f22348d5d9a3965ed5c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec6c8640000a9ad1ddfee53194884a9783cb73fd75caca59f66314a9a8904ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6c8640000a9ad1ddfee53194884a9783cb73fd75caca59f66314a9a8904ee1->enter($__internal_ec6c8640000a9ad1ddfee53194884a9783cb73fd75caca59f66314a9a8904ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ec6c8640000a9ad1ddfee53194884a9783cb73fd75caca59f66314a9a8904ee1->leave($__internal_ec6c8640000a9ad1ddfee53194884a9783cb73fd75caca59f66314a9a8904ee1_prof);

        
        $__internal_1421ade91a52b587b59d76089153476ce323d08262f22348d5d9a3965ed5c736->leave($__internal_1421ade91a52b587b59d76089153476ce323d08262f22348d5d9a3965ed5c736_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a78fc1e72be4b514d3e059e275c6b507f74b02202a70e3c0a381b4be2feb865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a78fc1e72be4b514d3e059e275c6b507f74b02202a70e3c0a381b4be2feb865->enter($__internal_7a78fc1e72be4b514d3e059e275c6b507f74b02202a70e3c0a381b4be2feb865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13c21c6bcc0956ec239264a5fb062383e9f0a6d87c97c4e13f497c032bd87e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c21c6bcc0956ec239264a5fb062383e9f0a6d87c97c4e13f497c032bd87e25->enter($__internal_13c21c6bcc0956ec239264a5fb062383e9f0a6d87c97c4e13f497c032bd87e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13c21c6bcc0956ec239264a5fb062383e9f0a6d87c97c4e13f497c032bd87e25->leave($__internal_13c21c6bcc0956ec239264a5fb062383e9f0a6d87c97c4e13f497c032bd87e25_prof);

        
        $__internal_7a78fc1e72be4b514d3e059e275c6b507f74b02202a70e3c0a381b4be2feb865->leave($__internal_7a78fc1e72be4b514d3e059e275c6b507f74b02202a70e3c0a381b4be2feb865_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/temp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
