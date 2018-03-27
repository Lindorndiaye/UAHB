<?php

/* ALNLindorBundle:template:calendar.html.twig */
class __TwigTemplate_8ea91121000a371a69d875af2c20dbe4bba69dfcff383ed2c8eb1afe5769028b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ALNLindor/layout.html.twig", "ALNLindorBundle:template:calendar.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ALNLindor/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a1c3cdaf89c90011176a902ad0690394b3631e626a7803a062944e933d5e23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1c3cdaf89c90011176a902ad0690394b3631e626a7803a062944e933d5e23e->enter($__internal_7a1c3cdaf89c90011176a902ad0690394b3631e626a7803a062944e933d5e23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:calendar.html.twig"));

        $__internal_4b005820e54078d3e4d66ed13e0272fc8d42676132042ee7f0562a3a719f4e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b005820e54078d3e4d66ed13e0272fc8d42676132042ee7f0562a3a719f4e43->enter($__internal_4b005820e54078d3e4d66ed13e0272fc8d42676132042ee7f0562a3a719f4e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1c3cdaf89c90011176a902ad0690394b3631e626a7803a062944e933d5e23e->leave($__internal_7a1c3cdaf89c90011176a902ad0690394b3631e626a7803a062944e933d5e23e_prof);

        
        $__internal_4b005820e54078d3e4d66ed13e0272fc8d42676132042ee7f0562a3a719f4e43->leave($__internal_4b005820e54078d3e4d66ed13e0272fc8d42676132042ee7f0562a3a719f4e43_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_05c977976d112e6d8658330ae6301aaeb557a491d2ff3024377ea8df5ed47e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c977976d112e6d8658330ae6301aaeb557a491d2ff3024377ea8df5ed47e34->enter($__internal_05c977976d112e6d8658330ae6301aaeb557a491d2ff3024377ea8df5ed47e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_dd56b381f167b655664a53cb239bbea15a7576302125d8bf8dfa590af19e88a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd56b381f167b655664a53cb239bbea15a7576302125d8bf8dfa590af19e88a2->enter($__internal_dd56b381f167b655664a53cb239bbea15a7576302125d8bf8dfa590af19e88a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

    <!--calendar css-->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

   
";
        
        $__internal_dd56b381f167b655664a53cb239bbea15a7576302125d8bf8dfa590af19e88a2->leave($__internal_dd56b381f167b655664a53cb239bbea15a7576302125d8bf8dfa590af19e88a2_prof);

        
        $__internal_05c977976d112e6d8658330ae6301aaeb557a491d2ff3024377ea8df5ed47e34->leave($__internal_05c977976d112e6d8658330ae6301aaeb557a491d2ff3024377ea8df5ed47e34_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e0da40d6c1d79d3f8b1e43f5b08ed533726e53b43d8b0eeeaf460d926378987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0da40d6c1d79d3f8b1e43f5b08ed533726e53b43d8b0eeeaf460d926378987->enter($__internal_2e0da40d6c1d79d3f8b1e43f5b08ed533726e53b43d8b0eeeaf460d926378987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11e0db990c256f6fec39e0f254680fb510d6c0b91e5db892895a2755af5aff97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e0db990c256f6fec39e0f254680fb510d6c0b91e5db892895a2755af5aff97->enter($__internal_11e0db990c256f6fec39e0f254680fb510d6c0b91e5db892895a2755af5aff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "


    
   
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h4 class=\"pull-left page-title\">Calendar</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Lindor</a></li>
                                <li class=\"active\">Calendar</li>
                            </ol>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">

                            <div class=\"row\">

                                <div class=\"col-md-12\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <div id=\"calendar\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-md-0\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-primary btn-block waves-effect waves-light\">
                                                        <i class=\"fa fa-plus\"></i> Create New
                                                    </a>
                                                    <div id=\"external-events\" class=\"m-t-20\">
                                                        <br>
                                                        <p>Drag and drop your event or click in the calendar</p>
                                                        <div class=\"external-event bg-inverse\" data-class=\"bg-inverse\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event One
                                                        </div>
                                                        <div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Two
                                                        </div>
                                                        <div class=\"external-event bg-primary\" data-class=\"bg-primary\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Three
                                                        </div>
                                                        <div class=\"external-event bg-purple\" data-class=\"bg-purple\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Four
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class=\"checkbox checkbox-primary m-t-40\">
                                                        <input id=\"drop-remove\" type=\"checkbox\">
                                                        <label for=\"drop-remove\">
                                                                Remove after drop
                                                            </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-->
                            </div>
                            <!-- end row -->

                            <!-- BEGIN MODAL -->
                            <div class=\"modal fade none-border\" id=\"event-modal\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add Event</strong></h4>
                                        </div>
                                        <div class=\"modal-body\"></div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                            <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Add Category -->
                            <div class=\"modal fade none-border\" id=\"add-category\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add</strong> a category</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form role=\"form\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Category Name</label>
                                                        <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\">
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Choose Category Color</label>
                                                        <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                                <option value=\"success\">Success</option>
                                                                <option value=\"danger\">Danger</option>
                                                                <option value=\"primary\">Primary</option>
                                                                <option value=\"warning\">Warning</option>
                                                                <option value=\"inverse\">Inverse</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->

  


";
        
        $__internal_11e0db990c256f6fec39e0f254680fb510d6c0b91e5db892895a2755af5aff97->leave($__internal_11e0db990c256f6fec39e0f254680fb510d6c0b91e5db892895a2755af5aff97_prof);

        
        $__internal_2e0da40d6c1d79d3f8b1e43f5b08ed533726e53b43d8b0eeeaf460d926378987->leave($__internal_2e0da40d6c1d79d3f8b1e43f5b08ed533726e53b43d8b0eeeaf460d926378987_prof);

    }

    // line 293
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_a043f94a40aa873b1443884b4e5673527fbb0f6a11a9271cfabf36357241c96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a043f94a40aa873b1443884b4e5673527fbb0f6a11a9271cfabf36357241c96c->enter($__internal_a043f94a40aa873b1443884b4e5673527fbb0f6a11a9271cfabf36357241c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_94e7a7856043baa8caaff71df1bd4ac2d8dbd7a022218495c34695931fa95009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e7a7856043baa8caaff71df1bd4ac2d8dbd7a022218495c34695931fa95009->enter($__internal_94e7a7856043baa8caaff71df1bd4ac2d8dbd7a022218495c34695931fa95009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 294
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  

   

    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- BEGIN PAGE SCRIPTS -->
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.fullcalendar.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_94e7a7856043baa8caaff71df1bd4ac2d8dbd7a022218495c34695931fa95009->leave($__internal_94e7a7856043baa8caaff71df1bd4ac2d8dbd7a022218495c34695931fa95009_prof);

        
        $__internal_a043f94a40aa873b1443884b4e5673527fbb0f6a11a9271cfabf36357241c96c->leave($__internal_a043f94a40aa873b1443884b4e5673527fbb0f6a11a9271cfabf36357241c96c_prof);

    }

    public function getTemplateName()
    {
        return "ALNLindorBundle:template:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 305,  405 => 304,  401 => 303,  395 => 300,  391 => 299,  383 => 294,  374 => 293,  88 => 16,  79 => 15,  65 => 9,  61 => 8,  55 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

 {% block stylesheet %}
{{parent()}}
<link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon_1.ico')}}\">

    <!--calendar css-->
    <link href=\"{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">

   
{% endblock %}


{% block body %}



    
   
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h4 class=\"pull-left page-title\">Calendar</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Lindor</a></li>
                                <li class=\"active\">Calendar</li>
                            </ol>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">

                            <div class=\"row\">

                                <div class=\"col-md-12\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <div id=\"calendar\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-md-0\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-primary btn-block waves-effect waves-light\">
                                                        <i class=\"fa fa-plus\"></i> Create New
                                                    </a>
                                                    <div id=\"external-events\" class=\"m-t-20\">
                                                        <br>
                                                        <p>Drag and drop your event or click in the calendar</p>
                                                        <div class=\"external-event bg-inverse\" data-class=\"bg-inverse\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event One
                                                        </div>
                                                        <div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Two
                                                        </div>
                                                        <div class=\"external-event bg-primary\" data-class=\"bg-primary\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Three
                                                        </div>
                                                        <div class=\"external-event bg-purple\" data-class=\"bg-purple\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Four
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class=\"checkbox checkbox-primary m-t-40\">
                                                        <input id=\"drop-remove\" type=\"checkbox\">
                                                        <label for=\"drop-remove\">
                                                                Remove after drop
                                                            </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-->
                            </div>
                            <!-- end row -->

                            <!-- BEGIN MODAL -->
                            <div class=\"modal fade none-border\" id=\"event-modal\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add Event</strong></h4>
                                        </div>
                                        <div class=\"modal-body\"></div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                            <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Add Category -->
                            <div class=\"modal fade none-border\" id=\"add-category\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add</strong> a category</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form role=\"form\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Category Name</label>
                                                        <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\">
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Choose Category Color</label>
                                                        <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                                <option value=\"success\">Success</option>
                                                                <option value=\"danger\">Danger</option>
                                                                <option value=\"primary\">Primary</option>
                                                                <option value=\"warning\">Warning</option>
                                                                <option value=\"inverse\">Inverse</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->

  


{% endblock %}
 {% block scripts %}
{{parent()}}
  

   

    <script src=\"{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

    <!-- BEGIN PAGE SCRIPTS -->
    <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.min.js')}}\"></script>
    <script src=\"{{ asset('assets/pages/jquery.fullcalendar.js')}}\"></script>

{% endblock %} ", "ALNLindorBundle:template:calendar.html.twig", "/var/www/html/temp/src/ALN/LindorBundle/Resources/views/template/calendar.html.twig");
    }
}
