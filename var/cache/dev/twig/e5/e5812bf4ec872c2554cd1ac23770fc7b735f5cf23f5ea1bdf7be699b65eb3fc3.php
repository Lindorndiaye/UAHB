<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_d03a2ebc7d37f5e6c46bce0eb96fe554628db3dfbeb131f33bc899e1ace4036a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03a2ebc7d37f5e6c46bce0eb96fe554628db3dfbeb131f33bc899e1ace4036a->enter($__internal_d03a2ebc7d37f5e6c46bce0eb96fe554628db3dfbeb131f33bc899e1ace4036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_443895632fe8bfaecb48fd3cb2840fe2768be6336a3b4b36f875e57c128de90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443895632fe8bfaecb48fd3cb2840fe2768be6336a3b4b36f875e57c128de90f->enter($__internal_443895632fe8bfaecb48fd3cb2840fe2768be6336a3b4b36f875e57c128de90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d03a2ebc7d37f5e6c46bce0eb96fe554628db3dfbeb131f33bc899e1ace4036a->leave($__internal_d03a2ebc7d37f5e6c46bce0eb96fe554628db3dfbeb131f33bc899e1ace4036a_prof);

        
        $__internal_443895632fe8bfaecb48fd3cb2840fe2768be6336a3b4b36f875e57c128de90f->leave($__internal_443895632fe8bfaecb48fd3cb2840fe2768be6336a3b4b36f875e57c128de90f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dddabb734a85aefdccd718f6ee36b3dd4beacb359aa63546f3e75fbfca30156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dddabb734a85aefdccd718f6ee36b3dd4beacb359aa63546f3e75fbfca30156->enter($__internal_0dddabb734a85aefdccd718f6ee36b3dd4beacb359aa63546f3e75fbfca30156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed136c02bd2377f7ce7ff470aeccf621f27afa26256984616f7acdd49b76603d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed136c02bd2377f7ce7ff470aeccf621f27afa26256984616f7acdd49b76603d->enter($__internal_ed136c02bd2377f7ce7ff470aeccf621f27afa26256984616f7acdd49b76603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ed136c02bd2377f7ce7ff470aeccf621f27afa26256984616f7acdd49b76603d->leave($__internal_ed136c02bd2377f7ce7ff470aeccf621f27afa26256984616f7acdd49b76603d_prof);

        
        $__internal_0dddabb734a85aefdccd718f6ee36b3dd4beacb359aa63546f3e75fbfca30156->leave($__internal_0dddabb734a85aefdccd718f6ee36b3dd4beacb359aa63546f3e75fbfca30156_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d655c1f683af10925fae3ace1f8bd66b2290036a94b791e8a37fde27a5aa4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d655c1f683af10925fae3ace1f8bd66b2290036a94b791e8a37fde27a5aa4ce->enter($__internal_0d655c1f683af10925fae3ace1f8bd66b2290036a94b791e8a37fde27a5aa4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04fc1e186b361ba964e981a759cf5a42cb6d6172cd4a7de598663ba820bd6e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fc1e186b361ba964e981a759cf5a42cb6d6172cd4a7de598663ba820bd6e7c->enter($__internal_04fc1e186b361ba964e981a759cf5a42cb6d6172cd4a7de598663ba820bd6e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_04fc1e186b361ba964e981a759cf5a42cb6d6172cd4a7de598663ba820bd6e7c->leave($__internal_04fc1e186b361ba964e981a759cf5a42cb6d6172cd4a7de598663ba820bd6e7c_prof);

        
        $__internal_0d655c1f683af10925fae3ace1f8bd66b2290036a94b791e8a37fde27a5aa4ce->leave($__internal_0d655c1f683af10925fae3ace1f8bd66b2290036a94b791e8a37fde27a5aa4ce_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9028945c7c1dc7eaf3588e53ed6af3be7505c1da9a57b6be56a59355f129c304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9028945c7c1dc7eaf3588e53ed6af3be7505c1da9a57b6be56a59355f129c304->enter($__internal_9028945c7c1dc7eaf3588e53ed6af3be7505c1da9a57b6be56a59355f129c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6e9d6e07febb09ce8b3c30858ba04d122c45669f90edea923d3c1971eda1565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e9d6e07febb09ce8b3c30858ba04d122c45669f90edea923d3c1971eda1565->enter($__internal_c6e9d6e07febb09ce8b3c30858ba04d122c45669f90edea923d3c1971eda1565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6e9d6e07febb09ce8b3c30858ba04d122c45669f90edea923d3c1971eda1565->leave($__internal_c6e9d6e07febb09ce8b3c30858ba04d122c45669f90edea923d3c1971eda1565_prof);

        
        $__internal_9028945c7c1dc7eaf3588e53ed6af3be7505c1da9a57b6be56a59355f129c304->leave($__internal_9028945c7c1dc7eaf3588e53ed6af3be7505c1da9a57b6be56a59355f129c304_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/template/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
