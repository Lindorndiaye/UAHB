<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38b199061bcb5b648a4df15c46bbf908b1edf69b73cfe8aadfec83a0aa0ab043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b199061bcb5b648a4df15c46bbf908b1edf69b73cfe8aadfec83a0aa0ab043->enter($__internal_38b199061bcb5b648a4df15c46bbf908b1edf69b73cfe8aadfec83a0aa0ab043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7dc68c3ae24d3b64f3a1ae1a97393467cb32f3fe1f6a606d31f6ccf2763ceecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc68c3ae24d3b64f3a1ae1a97393467cb32f3fe1f6a606d31f6ccf2763ceecc->enter($__internal_7dc68c3ae24d3b64f3a1ae1a97393467cb32f3fe1f6a606d31f6ccf2763ceecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b199061bcb5b648a4df15c46bbf908b1edf69b73cfe8aadfec83a0aa0ab043->leave($__internal_38b199061bcb5b648a4df15c46bbf908b1edf69b73cfe8aadfec83a0aa0ab043_prof);

        
        $__internal_7dc68c3ae24d3b64f3a1ae1a97393467cb32f3fe1f6a606d31f6ccf2763ceecc->leave($__internal_7dc68c3ae24d3b64f3a1ae1a97393467cb32f3fe1f6a606d31f6ccf2763ceecc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa505f76c093f554de64bb4d39243b78800dad7bc6893e15139750c3740137e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa505f76c093f554de64bb4d39243b78800dad7bc6893e15139750c3740137e2->enter($__internal_aa505f76c093f554de64bb4d39243b78800dad7bc6893e15139750c3740137e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bdf282fe2418e01ec64db6d861d1818ac0eeeb7bc09265463a7779ad58dd365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdf282fe2418e01ec64db6d861d1818ac0eeeb7bc09265463a7779ad58dd365->enter($__internal_9bdf282fe2418e01ec64db6d861d1818ac0eeeb7bc09265463a7779ad58dd365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9bdf282fe2418e01ec64db6d861d1818ac0eeeb7bc09265463a7779ad58dd365->leave($__internal_9bdf282fe2418e01ec64db6d861d1818ac0eeeb7bc09265463a7779ad58dd365_prof);

        
        $__internal_aa505f76c093f554de64bb4d39243b78800dad7bc6893e15139750c3740137e2->leave($__internal_aa505f76c093f554de64bb4d39243b78800dad7bc6893e15139750c3740137e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f0a9df5973af0b922dda3f69b19bb19f3f40084c5aced7506a1850902cf652a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0a9df5973af0b922dda3f69b19bb19f3f40084c5aced7506a1850902cf652a->enter($__internal_0f0a9df5973af0b922dda3f69b19bb19f3f40084c5aced7506a1850902cf652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c4b7827248861ade78c8297c33c8d2370ed10958bae37368b2b40aa0c27d07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4b7827248861ade78c8297c33c8d2370ed10958bae37368b2b40aa0c27d07b->enter($__internal_1c4b7827248861ade78c8297c33c8d2370ed10958bae37368b2b40aa0c27d07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1c4b7827248861ade78c8297c33c8d2370ed10958bae37368b2b40aa0c27d07b->leave($__internal_1c4b7827248861ade78c8297c33c8d2370ed10958bae37368b2b40aa0c27d07b_prof);

        
        $__internal_0f0a9df5973af0b922dda3f69b19bb19f3f40084c5aced7506a1850902cf652a->leave($__internal_0f0a9df5973af0b922dda3f69b19bb19f3f40084c5aced7506a1850902cf652a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ed32b20717e55b3b1cd19c7f720dda1c07738e0c1f9b59ec55db38360f6dc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed32b20717e55b3b1cd19c7f720dda1c07738e0c1f9b59ec55db38360f6dc1b->enter($__internal_9ed32b20717e55b3b1cd19c7f720dda1c07738e0c1f9b59ec55db38360f6dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_786d9d9ae2efb997097ad2b5d4ac0a575248cce95f206a043a8ff47fb89a1c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786d9d9ae2efb997097ad2b5d4ac0a575248cce95f206a043a8ff47fb89a1c94->enter($__internal_786d9d9ae2efb997097ad2b5d4ac0a575248cce95f206a043a8ff47fb89a1c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_786d9d9ae2efb997097ad2b5d4ac0a575248cce95f206a043a8ff47fb89a1c94->leave($__internal_786d9d9ae2efb997097ad2b5d4ac0a575248cce95f206a043a8ff47fb89a1c94_prof);

        
        $__internal_9ed32b20717e55b3b1cd19c7f720dda1c07738e0c1f9b59ec55db38360f6dc1b->leave($__internal_9ed32b20717e55b3b1cd19c7f720dda1c07738e0c1f9b59ec55db38360f6dc1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/temp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
