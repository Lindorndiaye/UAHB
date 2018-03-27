<?php

/* ALNLindorBundle:template:index.html.twig */
class __TwigTemplate_2a264634a070ab7845d3949b6c9c9cc4a70c36ad5ccf05db59de0e0d64f4e32e extends Twig_Template
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
        $__internal_f6c0551c76ebd3ee754e9d620565f6434df588da7520b3da4d4e5a620d542d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c0551c76ebd3ee754e9d620565f6434df588da7520b3da4d4e5a620d542d01->enter($__internal_f6c0551c76ebd3ee754e9d620565f6434df588da7520b3da4d4e5a620d542d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $__internal_53c36a76cffb7be2dd320c0a93f885a81ac77471d8bf8e066a2a29ee34374538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c36a76cffb7be2dd320c0a93f885a81ac77471d8bf8e066a2a29ee34374538->enter($__internal_53c36a76cffb7be2dd320c0a93f885a81ac77471d8bf8e066a2a29ee34374538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6c0551c76ebd3ee754e9d620565f6434df588da7520b3da4d4e5a620d542d01->leave($__internal_f6c0551c76ebd3ee754e9d620565f6434df588da7520b3da4d4e5a620d542d01_prof);

        
        $__internal_53c36a76cffb7be2dd320c0a93f885a81ac77471d8bf8e066a2a29ee34374538->leave($__internal_53c36a76cffb7be2dd320c0a93f885a81ac77471d8bf8e066a2a29ee34374538_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14bd9eef84e5233fd072fe5621c903bfd8298f803b066920280e5d3be727087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14bd9eef84e5233fd072fe5621c903bfd8298f803b066920280e5d3be727087->enter($__internal_c14bd9eef84e5233fd072fe5621c903bfd8298f803b066920280e5d3be727087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2107f7a7f20dd0dcd27cf1a188284b5a84f18a42de498cf542f22f0da5822e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2107f7a7f20dd0dcd27cf1a188284b5a84f18a42de498cf542f22f0da5822e09->enter($__internal_2107f7a7f20dd0dcd27cf1a188284b5a84f18a42de498cf542f22f0da5822e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2107f7a7f20dd0dcd27cf1a188284b5a84f18a42de498cf542f22f0da5822e09->leave($__internal_2107f7a7f20dd0dcd27cf1a188284b5a84f18a42de498cf542f22f0da5822e09_prof);

        
        $__internal_c14bd9eef84e5233fd072fe5621c903bfd8298f803b066920280e5d3be727087->leave($__internal_c14bd9eef84e5233fd072fe5621c903bfd8298f803b066920280e5d3be727087_prof);

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
{% endblock %}", "ALNLindorBundle:template:index.html.twig", "/var/www/html/temp/src/ALN/LindorBundle/Resources/views/template/index.html.twig");
    }
}
