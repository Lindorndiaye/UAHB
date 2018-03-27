<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fd61568e43506a059ee3e3703cddb5e46f10d2689c426b99b099d212759b6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd61568e43506a059ee3e3703cddb5e46f10d2689c426b99b099d212759b6f2->enter($__internal_0fd61568e43506a059ee3e3703cddb5e46f10d2689c426b99b099d212759b6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6980c21178003077a205657ddebafadda55a82c69d7b76702a8e7915a1bed3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6980c21178003077a205657ddebafadda55a82c69d7b76702a8e7915a1bed3ec->enter($__internal_6980c21178003077a205657ddebafadda55a82c69d7b76702a8e7915a1bed3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd61568e43506a059ee3e3703cddb5e46f10d2689c426b99b099d212759b6f2->leave($__internal_0fd61568e43506a059ee3e3703cddb5e46f10d2689c426b99b099d212759b6f2_prof);

        
        $__internal_6980c21178003077a205657ddebafadda55a82c69d7b76702a8e7915a1bed3ec->leave($__internal_6980c21178003077a205657ddebafadda55a82c69d7b76702a8e7915a1bed3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac3a0f8d2413ce709b3fb549289540c779c02bcc216cbf91c6f8b8f84b5090f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3a0f8d2413ce709b3fb549289540c779c02bcc216cbf91c6f8b8f84b5090f9->enter($__internal_ac3a0f8d2413ce709b3fb549289540c779c02bcc216cbf91c6f8b8f84b5090f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88b85a639685bd27ce3c619da31e4d8d20fa127a8a524ef7f9b339d048e1c23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b85a639685bd27ce3c619da31e4d8d20fa127a8a524ef7f9b339d048e1c23a->enter($__internal_88b85a639685bd27ce3c619da31e4d8d20fa127a8a524ef7f9b339d048e1c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_88b85a639685bd27ce3c619da31e4d8d20fa127a8a524ef7f9b339d048e1c23a->leave($__internal_88b85a639685bd27ce3c619da31e4d8d20fa127a8a524ef7f9b339d048e1c23a_prof);

        
        $__internal_ac3a0f8d2413ce709b3fb549289540c779c02bcc216cbf91c6f8b8f84b5090f9->leave($__internal_ac3a0f8d2413ce709b3fb549289540c779c02bcc216cbf91c6f8b8f84b5090f9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a516db3f72bbde257eb3afca539dbbdbab0cd7f9eb42a9cde10536459b2b3866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a516db3f72bbde257eb3afca539dbbdbab0cd7f9eb42a9cde10536459b2b3866->enter($__internal_a516db3f72bbde257eb3afca539dbbdbab0cd7f9eb42a9cde10536459b2b3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10e5b07f4710acea1c78482f4a543127b926a27d3e5d70ae52b0a3cafacdc090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e5b07f4710acea1c78482f4a543127b926a27d3e5d70ae52b0a3cafacdc090->enter($__internal_10e5b07f4710acea1c78482f4a543127b926a27d3e5d70ae52b0a3cafacdc090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10e5b07f4710acea1c78482f4a543127b926a27d3e5d70ae52b0a3cafacdc090->leave($__internal_10e5b07f4710acea1c78482f4a543127b926a27d3e5d70ae52b0a3cafacdc090_prof);

        
        $__internal_a516db3f72bbde257eb3afca539dbbdbab0cd7f9eb42a9cde10536459b2b3866->leave($__internal_a516db3f72bbde257eb3afca539dbbdbab0cd7f9eb42a9cde10536459b2b3866_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ba0986974048e1f5e2e4453e4a4db946dde7215e2dc77739221893f8a3a2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ba0986974048e1f5e2e4453e4a4db946dde7215e2dc77739221893f8a3a2da->enter($__internal_a8ba0986974048e1f5e2e4453e4a4db946dde7215e2dc77739221893f8a3a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a96f0e1675a03e7d88bc375477b009b8347cf6941ed6de678d7c5d60546c049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a96f0e1675a03e7d88bc375477b009b8347cf6941ed6de678d7c5d60546c049->enter($__internal_9a96f0e1675a03e7d88bc375477b009b8347cf6941ed6de678d7c5d60546c049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9a96f0e1675a03e7d88bc375477b009b8347cf6941ed6de678d7c5d60546c049->leave($__internal_9a96f0e1675a03e7d88bc375477b009b8347cf6941ed6de678d7c5d60546c049_prof);

        
        $__internal_a8ba0986974048e1f5e2e4453e4a4db946dde7215e2dc77739221893f8a3a2da->leave($__internal_a8ba0986974048e1f5e2e4453e4a4db946dde7215e2dc77739221893f8a3a2da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/template/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
