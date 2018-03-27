<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
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
        $__internal_be222e6a1bd42be0072685250122a194048ae60dcc5adf1c1c3e1766e3566715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be222e6a1bd42be0072685250122a194048ae60dcc5adf1c1c3e1766e3566715->enter($__internal_be222e6a1bd42be0072685250122a194048ae60dcc5adf1c1c3e1766e3566715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3318d545042f9430e8fa4cfa8d764b9bc1e711aec89d03dccd7724fa38179bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3318d545042f9430e8fa4cfa8d764b9bc1e711aec89d03dccd7724fa38179bbe->enter($__internal_3318d545042f9430e8fa4cfa8d764b9bc1e711aec89d03dccd7724fa38179bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be222e6a1bd42be0072685250122a194048ae60dcc5adf1c1c3e1766e3566715->leave($__internal_be222e6a1bd42be0072685250122a194048ae60dcc5adf1c1c3e1766e3566715_prof);

        
        $__internal_3318d545042f9430e8fa4cfa8d764b9bc1e711aec89d03dccd7724fa38179bbe->leave($__internal_3318d545042f9430e8fa4cfa8d764b9bc1e711aec89d03dccd7724fa38179bbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f72ce6edd861b14ce02fda032955dba62b0d13e3e831c46e8f0518f807a12d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72ce6edd861b14ce02fda032955dba62b0d13e3e831c46e8f0518f807a12d0e->enter($__internal_f72ce6edd861b14ce02fda032955dba62b0d13e3e831c46e8f0518f807a12d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b5c5095560afa85b2c9aeab945b8301b7f1ba7ff5b3121e4d1012f3fe39efe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5c5095560afa85b2c9aeab945b8301b7f1ba7ff5b3121e4d1012f3fe39efe7->enter($__internal_0b5c5095560afa85b2c9aeab945b8301b7f1ba7ff5b3121e4d1012f3fe39efe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b5c5095560afa85b2c9aeab945b8301b7f1ba7ff5b3121e4d1012f3fe39efe7->leave($__internal_0b5c5095560afa85b2c9aeab945b8301b7f1ba7ff5b3121e4d1012f3fe39efe7_prof);

        
        $__internal_f72ce6edd861b14ce02fda032955dba62b0d13e3e831c46e8f0518f807a12d0e->leave($__internal_f72ce6edd861b14ce02fda032955dba62b0d13e3e831c46e8f0518f807a12d0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_779acc86ac10c5a3dd2089fe233e3971cb5f7e0c3b89ea2a66a36ef181f8d9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779acc86ac10c5a3dd2089fe233e3971cb5f7e0c3b89ea2a66a36ef181f8d9b2->enter($__internal_779acc86ac10c5a3dd2089fe233e3971cb5f7e0c3b89ea2a66a36ef181f8d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b0334a5b28c308b28da04cbb55bfe59260f8e466b579dec3833d00f81a966dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0334a5b28c308b28da04cbb55bfe59260f8e466b579dec3833d00f81a966dc->enter($__internal_5b0334a5b28c308b28da04cbb55bfe59260f8e466b579dec3833d00f81a966dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b0334a5b28c308b28da04cbb55bfe59260f8e466b579dec3833d00f81a966dc->leave($__internal_5b0334a5b28c308b28da04cbb55bfe59260f8e466b579dec3833d00f81a966dc_prof);

        
        $__internal_779acc86ac10c5a3dd2089fe233e3971cb5f7e0c3b89ea2a66a36ef181f8d9b2->leave($__internal_779acc86ac10c5a3dd2089fe233e3971cb5f7e0c3b89ea2a66a36ef181f8d9b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33993500260436c18c981efdf1ad8a88275d95f234573f93a098a1827eeebd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33993500260436c18c981efdf1ad8a88275d95f234573f93a098a1827eeebd62->enter($__internal_33993500260436c18c981efdf1ad8a88275d95f234573f93a098a1827eeebd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fbd015ce0f50abf1c3bfa83ee4e2916c44a04b3d971c4c07af85ba75d98e19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbd015ce0f50abf1c3bfa83ee4e2916c44a04b3d971c4c07af85ba75d98e19d->enter($__internal_6fbd015ce0f50abf1c3bfa83ee4e2916c44a04b3d971c4c07af85ba75d98e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fbd015ce0f50abf1c3bfa83ee4e2916c44a04b3d971c4c07af85ba75d98e19d->leave($__internal_6fbd015ce0f50abf1c3bfa83ee4e2916c44a04b3d971c4c07af85ba75d98e19d_prof);

        
        $__internal_33993500260436c18c981efdf1ad8a88275d95f234573f93a098a1827eeebd62->leave($__internal_33993500260436c18c981efdf1ad8a88275d95f234573f93a098a1827eeebd62_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/temp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
