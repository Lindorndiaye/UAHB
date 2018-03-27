<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a46ab959f6921d8ca2243dc44c4b0bd3e1236519d90fe29414256786f3f40503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46ab959f6921d8ca2243dc44c4b0bd3e1236519d90fe29414256786f3f40503->enter($__internal_a46ab959f6921d8ca2243dc44c4b0bd3e1236519d90fe29414256786f3f40503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0c1d27130871e30aa2bafb1cbf035e185196c234b38bdc3ed3a2204ebf62c695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1d27130871e30aa2bafb1cbf035e185196c234b38bdc3ed3a2204ebf62c695->enter($__internal_0c1d27130871e30aa2bafb1cbf035e185196c234b38bdc3ed3a2204ebf62c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46ab959f6921d8ca2243dc44c4b0bd3e1236519d90fe29414256786f3f40503->leave($__internal_a46ab959f6921d8ca2243dc44c4b0bd3e1236519d90fe29414256786f3f40503_prof);

        
        $__internal_0c1d27130871e30aa2bafb1cbf035e185196c234b38bdc3ed3a2204ebf62c695->leave($__internal_0c1d27130871e30aa2bafb1cbf035e185196c234b38bdc3ed3a2204ebf62c695_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84cb8f2f960cd41a89a9ae4ed86cb16c5a87cf6477f1cde5a1d927652e07ee4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cb8f2f960cd41a89a9ae4ed86cb16c5a87cf6477f1cde5a1d927652e07ee4f->enter($__internal_84cb8f2f960cd41a89a9ae4ed86cb16c5a87cf6477f1cde5a1d927652e07ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b8958b74d7ca062825d034fb6e1f5f276117c1d7b0a19d18ec4d956d2322f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8958b74d7ca062825d034fb6e1f5f276117c1d7b0a19d18ec4d956d2322f3a->enter($__internal_8b8958b74d7ca062825d034fb6e1f5f276117c1d7b0a19d18ec4d956d2322f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b8958b74d7ca062825d034fb6e1f5f276117c1d7b0a19d18ec4d956d2322f3a->leave($__internal_8b8958b74d7ca062825d034fb6e1f5f276117c1d7b0a19d18ec4d956d2322f3a_prof);

        
        $__internal_84cb8f2f960cd41a89a9ae4ed86cb16c5a87cf6477f1cde5a1d927652e07ee4f->leave($__internal_84cb8f2f960cd41a89a9ae4ed86cb16c5a87cf6477f1cde5a1d927652e07ee4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd7a07998d868666f26f5dbbd19ec7b8484d1af92a90dde9ccda69b8f10201b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7a07998d868666f26f5dbbd19ec7b8484d1af92a90dde9ccda69b8f10201b2->enter($__internal_fd7a07998d868666f26f5dbbd19ec7b8484d1af92a90dde9ccda69b8f10201b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7984ed517bcad603fdeda85d05086b375f2b0e06fecb34db66a324cff1d03349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7984ed517bcad603fdeda85d05086b375f2b0e06fecb34db66a324cff1d03349->enter($__internal_7984ed517bcad603fdeda85d05086b375f2b0e06fecb34db66a324cff1d03349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7984ed517bcad603fdeda85d05086b375f2b0e06fecb34db66a324cff1d03349->leave($__internal_7984ed517bcad603fdeda85d05086b375f2b0e06fecb34db66a324cff1d03349_prof);

        
        $__internal_fd7a07998d868666f26f5dbbd19ec7b8484d1af92a90dde9ccda69b8f10201b2->leave($__internal_fd7a07998d868666f26f5dbbd19ec7b8484d1af92a90dde9ccda69b8f10201b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5306479f1919308650689962257f281df6bbfd52bf54e918a6b8548776a384d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5306479f1919308650689962257f281df6bbfd52bf54e918a6b8548776a384d6->enter($__internal_5306479f1919308650689962257f281df6bbfd52bf54e918a6b8548776a384d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7329800cd99b363d73ee6394ced0d5214d8e9e104eca95e67ae5c5e7426bbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7329800cd99b363d73ee6394ced0d5214d8e9e104eca95e67ae5c5e7426bbf4->enter($__internal_c7329800cd99b363d73ee6394ced0d5214d8e9e104eca95e67ae5c5e7426bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7329800cd99b363d73ee6394ced0d5214d8e9e104eca95e67ae5c5e7426bbf4->leave($__internal_c7329800cd99b363d73ee6394ced0d5214d8e9e104eca95e67ae5c5e7426bbf4_prof);

        
        $__internal_5306479f1919308650689962257f281df6bbfd52bf54e918a6b8548776a384d6->leave($__internal_5306479f1919308650689962257f281df6bbfd52bf54e918a6b8548776a384d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/template/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
