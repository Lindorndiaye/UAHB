<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
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
        $__internal_84682a22bfae5b7cd771f1f8d11dc78a658f9921d991643fdf8f56e9861cc05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84682a22bfae5b7cd771f1f8d11dc78a658f9921d991643fdf8f56e9861cc05c->enter($__internal_84682a22bfae5b7cd771f1f8d11dc78a658f9921d991643fdf8f56e9861cc05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_97befed518b48ab257408c165eff99b153c6e453755470ee5533bbde61e4fc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97befed518b48ab257408c165eff99b153c6e453755470ee5533bbde61e4fc4e->enter($__internal_97befed518b48ab257408c165eff99b153c6e453755470ee5533bbde61e4fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84682a22bfae5b7cd771f1f8d11dc78a658f9921d991643fdf8f56e9861cc05c->leave($__internal_84682a22bfae5b7cd771f1f8d11dc78a658f9921d991643fdf8f56e9861cc05c_prof);

        
        $__internal_97befed518b48ab257408c165eff99b153c6e453755470ee5533bbde61e4fc4e->leave($__internal_97befed518b48ab257408c165eff99b153c6e453755470ee5533bbde61e4fc4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f1575841f0d63fa6e238ecfaebc9fdf32662f5581152b23a1bfe35f4a1bcbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1575841f0d63fa6e238ecfaebc9fdf32662f5581152b23a1bfe35f4a1bcbb3->enter($__internal_7f1575841f0d63fa6e238ecfaebc9fdf32662f5581152b23a1bfe35f4a1bcbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_004027f8f95d57e181ff3a5c22cd3dba488618f35474d22205caa64b9ce5ec21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004027f8f95d57e181ff3a5c22cd3dba488618f35474d22205caa64b9ce5ec21->enter($__internal_004027f8f95d57e181ff3a5c22cd3dba488618f35474d22205caa64b9ce5ec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_004027f8f95d57e181ff3a5c22cd3dba488618f35474d22205caa64b9ce5ec21->leave($__internal_004027f8f95d57e181ff3a5c22cd3dba488618f35474d22205caa64b9ce5ec21_prof);

        
        $__internal_7f1575841f0d63fa6e238ecfaebc9fdf32662f5581152b23a1bfe35f4a1bcbb3->leave($__internal_7f1575841f0d63fa6e238ecfaebc9fdf32662f5581152b23a1bfe35f4a1bcbb3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd95858044f7b0d5c56c2a6fc0ecde0f2306a45f5cb5d75a106d0e2f75bace8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd95858044f7b0d5c56c2a6fc0ecde0f2306a45f5cb5d75a106d0e2f75bace8b->enter($__internal_fd95858044f7b0d5c56c2a6fc0ecde0f2306a45f5cb5d75a106d0e2f75bace8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c09fb86661b1d776ed99ed83e1beabac4f1122beb18e8f633f946bdc5735e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c09fb86661b1d776ed99ed83e1beabac4f1122beb18e8f633f946bdc5735e4b->enter($__internal_8c09fb86661b1d776ed99ed83e1beabac4f1122beb18e8f633f946bdc5735e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c09fb86661b1d776ed99ed83e1beabac4f1122beb18e8f633f946bdc5735e4b->leave($__internal_8c09fb86661b1d776ed99ed83e1beabac4f1122beb18e8f633f946bdc5735e4b_prof);

        
        $__internal_fd95858044f7b0d5c56c2a6fc0ecde0f2306a45f5cb5d75a106d0e2f75bace8b->leave($__internal_fd95858044f7b0d5c56c2a6fc0ecde0f2306a45f5cb5d75a106d0e2f75bace8b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e614bc221cd09f7247a56bb2cfd1eae6318555f0d30346d0fbe77e6bcfc62a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e614bc221cd09f7247a56bb2cfd1eae6318555f0d30346d0fbe77e6bcfc62a8a->enter($__internal_e614bc221cd09f7247a56bb2cfd1eae6318555f0d30346d0fbe77e6bcfc62a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62bf3a634c6eabc6810aa28b9477f4722022d41497187850b568b2689596efe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bf3a634c6eabc6810aa28b9477f4722022d41497187850b568b2689596efe4->enter($__internal_62bf3a634c6eabc6810aa28b9477f4722022d41497187850b568b2689596efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_62bf3a634c6eabc6810aa28b9477f4722022d41497187850b568b2689596efe4->leave($__internal_62bf3a634c6eabc6810aa28b9477f4722022d41497187850b568b2689596efe4_prof);

        
        $__internal_e614bc221cd09f7247a56bb2cfd1eae6318555f0d30346d0fbe77e6bcfc62a8a->leave($__internal_e614bc221cd09f7247a56bb2cfd1eae6318555f0d30346d0fbe77e6bcfc62a8a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/template/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
