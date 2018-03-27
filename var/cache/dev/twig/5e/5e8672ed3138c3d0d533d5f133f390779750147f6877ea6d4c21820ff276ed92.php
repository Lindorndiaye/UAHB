<?php

/* @ALNLindor/layout.html.twig */
class __TwigTemplate_3533110b43096d1eeb0885022a71fcbaa4c5a50054d39f1419b8ff9e22c1dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@ALNLindor/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f170fdac397f44548a80dfe97b9a95b991f8b539b4a48be8815ab5beebf78f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f170fdac397f44548a80dfe97b9a95b991f8b539b4a48be8815ab5beebf78f53->enter($__internal_f170fdac397f44548a80dfe97b9a95b991f8b539b4a48be8815ab5beebf78f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $__internal_163b8e62e5584937a80882aeb762db693472450569400af4dbe493c867ca6fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163b8e62e5584937a80882aeb762db693472450569400af4dbe493c867ca6fe2->enter($__internal_163b8e62e5584937a80882aeb762db693472450569400af4dbe493c867ca6fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f170fdac397f44548a80dfe97b9a95b991f8b539b4a48be8815ab5beebf78f53->leave($__internal_f170fdac397f44548a80dfe97b9a95b991f8b539b4a48be8815ab5beebf78f53_prof);

        
        $__internal_163b8e62e5584937a80882aeb762db693472450569400af4dbe493c867ca6fe2->leave($__internal_163b8e62e5584937a80882aeb762db693472450569400af4dbe493c867ca6fe2_prof);

    }

    public function getTemplateName()
    {
        return "@ALNLindor/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
  

  ", "@ALNLindor/layout.html.twig", "/var/www/html/template/src/ALN/LindorBundle/Resources/views/layout.html.twig");
    }
}
