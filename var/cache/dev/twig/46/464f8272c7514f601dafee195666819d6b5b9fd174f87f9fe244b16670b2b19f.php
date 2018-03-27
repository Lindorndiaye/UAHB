<?php

/* ALNLindorBundle:template:index.html.twig */
class __TwigTemplate_2a091be2a2144fc3fa6a2abf859d50b78514c4b322b88fbfc002e9a229473eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ALNLindor/layout.html.twig", "ALNLindorBundle:template:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ALNLindor/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64ffc878e43a5574bacc6b34e707630f86f2b95f2372b0c01931460dbfbf03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64ffc878e43a5574bacc6b34e707630f86f2b95f2372b0c01931460dbfbf03d->enter($__internal_e64ffc878e43a5574bacc6b34e707630f86f2b95f2372b0c01931460dbfbf03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $__internal_00a43bb41a826123dbc51ae4cf30d83666b693c2b69b836082371e14514a12c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a43bb41a826123dbc51ae4cf30d83666b693c2b69b836082371e14514a12c2->enter($__internal_00a43bb41a826123dbc51ae4cf30d83666b693c2b69b836082371e14514a12c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64ffc878e43a5574bacc6b34e707630f86f2b95f2372b0c01931460dbfbf03d->leave($__internal_e64ffc878e43a5574bacc6b34e707630f86f2b95f2372b0c01931460dbfbf03d_prof);

        
        $__internal_00a43bb41a826123dbc51ae4cf30d83666b693c2b69b836082371e14514a12c2->leave($__internal_00a43bb41a826123dbc51ae4cf30d83666b693c2b69b836082371e14514a12c2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8233d5763475c2a638e4cf6f4ef23bde84e6378829c4a5e81a08fe1c61c34f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8233d5763475c2a638e4cf6f4ef23bde84e6378829c4a5e81a08fe1c61c34f54->enter($__internal_8233d5763475c2a638e4cf6f4ef23bde84e6378829c4a5e81a08fe1c61c34f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18f32403c82fd2f42465aab95c56648f82d898437a1e0a7a7657ab4115b37add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f32403c82fd2f42465aab95c56648f82d898437a1e0a7a7657ab4115b37add->enter($__internal_18f32403c82fd2f42465aab95c56648f82d898437a1e0a7a7657ab4115b37add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"content-page \">
                <!-- Start content -->      
                <div class=\"content  \">
                    <div class=\"container \">

                        <!-- Page-Title -->
                        <div class=\"row bg-primary\" style=\"width:600; height:auto; box-shadow: 10px 10px 5px #aaaaaa; margin-top:50px; margin-left:100px; margin-right:100px;\" >
                           

                        

J'ai mis la longueur de ce div a auto il s'adapte en fonction du contenu 











                        </div>

                     </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right bg-secondary\" >
                    2018 © Lindor.
                </footer>

            </div>
";
        
        $__internal_18f32403c82fd2f42465aab95c56648f82d898437a1e0a7a7657ab4115b37add->leave($__internal_18f32403c82fd2f42465aab95c56648f82d898437a1e0a7a7657ab4115b37add_prof);

        
        $__internal_8233d5763475c2a638e4cf6f4ef23bde84e6378829c4a5e81a08fe1c61c34f54->leave($__internal_8233d5763475c2a638e4cf6f4ef23bde84e6378829c4a5e81a08fe1c61c34f54_prof);

    }

    public function getTemplateName()
    {
        return "ALNLindorBundle:template:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@ALNLindor/layout.html.twig\" %}
{% block body %}
 <div class=\"content-page \">
                <!-- Start content -->      
                <div class=\"content  \">
                    <div class=\"container \">

                        <!-- Page-Title -->
                        <div class=\"row bg-primary\" style=\"width:600; height:auto; box-shadow: 10px 10px 5px #aaaaaa; margin-top:50px; margin-left:100px; margin-right:100px;\" >
                           

                        

J'ai mis la longueur de ce div a auto il s'adapte en fonction du contenu 











                        </div>

                     </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right bg-secondary\" >
                    2018 © Lindor.
                </footer>

            </div>
{% endblock %}", "ALNLindorBundle:template:index.html.twig", "/var/www/html/template/src/ALN/LindorBundle/Resources/views/template/index.html.twig");
    }
}
