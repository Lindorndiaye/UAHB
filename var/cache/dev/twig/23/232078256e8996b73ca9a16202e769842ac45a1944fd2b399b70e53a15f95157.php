<?php

/* @ALNLindor/layout.html.twig */
class __TwigTemplate_c2cd4434a96dcbd500c73b1a8537e9835befc073a77f2d2cce3458e7cf0f3328 extends Twig_Template
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
        $__internal_1af9415bf6404cead0abe59a1050dfbbeb4f76396ec26bc068fef72352246a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af9415bf6404cead0abe59a1050dfbbeb4f76396ec26bc068fef72352246a90->enter($__internal_1af9415bf6404cead0abe59a1050dfbbeb4f76396ec26bc068fef72352246a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $__internal_d4eea7aa8d67148a11465a32cd6bd602ddfd53d1daedd5d42aa9afee9549a7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eea7aa8d67148a11465a32cd6bd602ddfd53d1daedd5d42aa9afee9549a7ca->enter($__internal_d4eea7aa8d67148a11465a32cd6bd602ddfd53d1daedd5d42aa9afee9549a7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af9415bf6404cead0abe59a1050dfbbeb4f76396ec26bc068fef72352246a90->leave($__internal_1af9415bf6404cead0abe59a1050dfbbeb4f76396ec26bc068fef72352246a90_prof);

        
        $__internal_d4eea7aa8d67148a11465a32cd6bd602ddfd53d1daedd5d42aa9afee9549a7ca->leave($__internal_d4eea7aa8d67148a11465a32cd6bd602ddfd53d1daedd5d42aa9afee9549a7ca_prof);

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

  

  ", "@ALNLindor/layout.html.twig", "/var/www/html/temp/src/ALN/LindorBundle/Resources/views/layout.html.twig");
    }
}
