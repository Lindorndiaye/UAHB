<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'side' => array($this, 'block_side'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4337ff2d516a3cf5ccc41ca84f32799a2069057337a0f61723f4e69fe910a2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4337ff2d516a3cf5ccc41ca84f32799a2069057337a0f61723f4e69fe910a2aa->enter($__internal_4337ff2d516a3cf5ccc41ca84f32799a2069057337a0f61723f4e69fe910a2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_29b3fe2ca3117cd3f512aa98fcfbd64d3745d887312eda26fdb26273ce7fafe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b3fe2ca3117cd3f512aa98fcfbd64d3745d887312eda26fdb26273ce7fafe1->enter($__internal_29b3fe2ca3117cd3f512aa98fcfbd64d3745d887312eda26fdb26273ce7fafe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 33
        echo "
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>


    <body class=\"fixed-left\"  style=\"background:whitesmoke;\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>UAHB</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/lindor.png"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

";
        // line 154
        $this->displayBlock('side', $context, $blocks);
        // line 254
        echo "            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
           ";
        // line 257
        $this->displayBlock('body', $context, $blocks);
        // line 259
        echo "            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
";
        // line 270
        $this->displayBlock('scripts', $context, $blocks);
        // line 334
        echo "    </body>
</html>


";
        
        $__internal_4337ff2d516a3cf5ccc41ca84f32799a2069057337a0f61723f4e69fe910a2aa->leave($__internal_4337ff2d516a3cf5ccc41ca84f32799a2069057337a0f61723f4e69fe910a2aa_prof);

        
        $__internal_29b3fe2ca3117cd3f512aa98fcfbd64d3745d887312eda26fdb26273ce7fafe1->leave($__internal_29b3fe2ca3117cd3f512aa98fcfbd64d3745d887312eda26fdb26273ce7fafe1_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d70bb51f67c203fe33ae2a30758ce6f243f27886fad71286837d730cb1e4f758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70bb51f67c203fe33ae2a30758ce6f243f27886fad71286837d730cb1e4f758->enter($__internal_d70bb51f67c203fe33ae2a30758ce6f243f27886fad71286837d730cb1e4f758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_38ee264413ecb621ec3a80a965c079edbe0500a8e4e7da5d54dfa80f477d32ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ee264413ecb621ec3a80a965c079edbe0500a8e4e7da5d54dfa80f477d32ff->enter($__internal_38ee264413ecb621ec3a80a965c079edbe0500a8e4e7da5d54dfa80f477d32ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "
        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/onglet/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/onglet/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/onglet/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_38ee264413ecb621ec3a80a965c079edbe0500a8e4e7da5d54dfa80f477d32ff->leave($__internal_38ee264413ecb621ec3a80a965c079edbe0500a8e4e7da5d54dfa80f477d32ff_prof);

        
        $__internal_d70bb51f67c203fe33ae2a30758ce6f243f27886fad71286837d730cb1e4f758->leave($__internal_d70bb51f67c203fe33ae2a30758ce6f243f27886fad71286837d730cb1e4f758_prof);

    }

    // line 154
    public function block_side($context, array $blocks = array())
    {
        $__internal_b47431125d8898695f086c845ec825a0b78b80340ddde28c4a4cf79e1000e785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47431125d8898695f086c845ec825a0b78b80340ddde28c4a4cf79e1000e785->enter($__internal_b47431125d8898695f086c845ec825a0b78b80340ddde28c4a4cf79e1000e785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        $__internal_f2153aabc23418f73f17e5f2d27a1e0dbd1280d7ea9b14f7ba0c5ff2a8ac49db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2153aabc23418f73f17e5f2d27a1e0dbd1280d7ea9b14f7ba0c5ff2a8ac49db->enter($__internal_f2153aabc23418f73f17e5f2d27a1e0dbd1280d7ea9b14f7ba0c5ff2a8ac49db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 155
        echo "            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu bg-primary\" style=\"color:#000; width:300px;\" >
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/lindor.png"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" style=\"color:white;\">Lindor NDIAYE <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" >
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\" style=\"color:white;\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul class=\"bg-primary\" style=\"color:#000;\">
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-person\"></i><span> Login utilisateurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendar");
        echo "\" class=\"waves-effect\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Les profils</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\">Gestion des utilisateurs</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\">Utilisateurs et mot de passe</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                
                                <a href=\"#\" class=\"waves-effect\" ><i class=\"md md-settings\"></i><span> Paramétrage </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li class=\"has_sub\">
                                        <a href=\"mail-inbox.html\" onclick=\"WindowOpen1();return false\" style=\"color:#424949 ;\" ><span> Organisation pédagogique </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul class=\"list-unstyled\" style=\"color:white;\">
                                            <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendar");
        echo "\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Facultés et départements</a></li>
                                            <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Filières et classes</a></li>
                                            <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Nationalité et pays</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has_sub\">
                                        <a href=\"mail-inbox.html\" class=\"waves-effect\" style=\"color:#424949 ;\"><span> Frais de scolarite et dossier </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul class=\"list-unstyled\" style=\"color:white;\">
                                            <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >les pièces à fournir</a></li>
                                            <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >tarifs globaux</a></li>
                                            <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Frais ee scolarité par classe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-content-paste\"></i><span> Porte-feuille étudiants </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Gestions des étudiants</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >liste de tous les étudiants</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Numéros de télépnone</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Inscription par date</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Récap global des éffectifs</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-storage\"></i><span> School Docs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Demande de stage</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Préinscription</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-data-usage\"></i><span> Requetes </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par niveau</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par faculté</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par département</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par filière</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par classe</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par spécialité</a></li>
                                </ul>
                            </li>

                            
                        </ul>
                        ";
        // line 246
        echo "                    </div>
                    ";
        // line 248
        echo "                </div>
            </div>
            <!-- Left Sidebar End --> 


";
        
        $__internal_f2153aabc23418f73f17e5f2d27a1e0dbd1280d7ea9b14f7ba0c5ff2a8ac49db->leave($__internal_f2153aabc23418f73f17e5f2d27a1e0dbd1280d7ea9b14f7ba0c5ff2a8ac49db_prof);

        
        $__internal_b47431125d8898695f086c845ec825a0b78b80340ddde28c4a4cf79e1000e785->leave($__internal_b47431125d8898695f086c845ec825a0b78b80340ddde28c4a4cf79e1000e785_prof);

    }

    // line 257
    public function block_body($context, array $blocks = array())
    {
        $__internal_5768243300210a435da0903184f3e85b0b1ccac48c49dd80b72a1ce7c61daec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5768243300210a435da0903184f3e85b0b1ccac48c49dd80b72a1ce7c61daec8->enter($__internal_5768243300210a435da0903184f3e85b0b1ccac48c49dd80b72a1ce7c61daec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df960ce962a23f6d4d5c6d682d67581a14c053e5ebcf3e72ac5e7097406b8ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df960ce962a23f6d4d5c6d682d67581a14c053e5ebcf3e72ac5e7097406b8ca6->enter($__internal_df960ce962a23f6d4d5c6d682d67581a14c053e5ebcf3e72ac5e7097406b8ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 258
        echo "           ";
        
        $__internal_df960ce962a23f6d4d5c6d682d67581a14c053e5ebcf3e72ac5e7097406b8ca6->leave($__internal_df960ce962a23f6d4d5c6d682d67581a14c053e5ebcf3e72ac5e7097406b8ca6_prof);

        
        $__internal_5768243300210a435da0903184f3e85b0b1ccac48c49dd80b72a1ce7c61daec8->leave($__internal_5768243300210a435da0903184f3e85b0b1ccac48c49dd80b72a1ce7c61daec8_prof);

    }

    // line 270
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_624db0b7a682f6d59f10e0a66a61fe9c1e8cd48fadbe9e1a2775de9f9a5551ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624db0b7a682f6d59f10e0a66a61fe9c1e8cd48fadbe9e1a2775de9f9a5551ee->enter($__internal_624db0b7a682f6d59f10e0a66a61fe9c1e8cd48fadbe9e1a2775de9f9a5551ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_c30f9de34233a1f69e79ddc83e6d2bba810ed3a06afce14c97aebed59edf479d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30f9de34233a1f69e79ddc83e6d2bba810ed3a06afce14c97aebed59edf479d->enter($__internal_c30f9de34233a1f69e79ddc83e6d2bba810ed3a06afce14c97aebed59edf479d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 271
        echo "    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    ";
        
        $__internal_c30f9de34233a1f69e79ddc83e6d2bba810ed3a06afce14c97aebed59edf479d->leave($__internal_c30f9de34233a1f69e79ddc83e6d2bba810ed3a06afce14c97aebed59edf479d_prof);

        
        $__internal_624db0b7a682f6d59f10e0a66a61fe9c1e8cd48fadbe9e1a2775de9f9a5551ee->leave($__internal_624db0b7a682f6d59f10e0a66a61fe9c1e8cd48fadbe9e1a2775de9f9a5551ee_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 318,  559 => 315,  553 => 312,  547 => 309,  543 => 308,  539 => 307,  535 => 306,  531 => 305,  527 => 304,  523 => 303,  519 => 302,  512 => 298,  506 => 295,  502 => 294,  496 => 291,  490 => 288,  485 => 286,  481 => 285,  477 => 284,  473 => 283,  469 => 282,  465 => 281,  461 => 280,  457 => 279,  453 => 278,  449 => 277,  441 => 271,  432 => 270,  422 => 258,  413 => 257,  398 => 248,  395 => 246,  343 => 196,  327 => 183,  302 => 161,  294 => 155,  285 => 154,  272 => 30,  268 => 29,  264 => 28,  260 => 27,  253 => 23,  249 => 22,  245 => 21,  241 => 20,  237 => 19,  233 => 18,  229 => 17,  224 => 15,  219 => 12,  210 => 11,  196 => 334,  194 => 270,  181 => 259,  179 => 257,  174 => 254,  172 => 154,  153 => 138,  67 => 55,  43 => 33,  41 => 11,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        {% block stylesheet %}

        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>

        <link rel=\"stylesheet\" href=\"{{ asset('css/onglet/bootstrap.min.css') }}\" />
        <script src=\"{{ asset('js/onglet/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/onglet/bootstrap.min.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />

        {% endblock %}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>


    <body class=\"fixed-left\"  style=\"background:whitesmoke;\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"{{ path('index') }}\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>UAHB</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{ asset('assets/images/users/lindor.png')}}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

{% block side %}
            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu bg-primary\" style=\"color:#000; width:300px;\" >
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"{{ asset('assets/images/users/lindor.png')}}\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" style=\"color:white;\">Lindor NDIAYE <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" >
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\" style=\"color:white;\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul class=\"bg-primary\" style=\"color:#000;\">
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-person\"></i><span> Login utilisateurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"{{ path('calendar') }}\" class=\"waves-effect\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Les profils</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\">Gestion des utilisateurs</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\">Utilisateurs et mot de passe</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                
                                <a href=\"#\" class=\"waves-effect\" ><i class=\"md md-settings\"></i><span> Paramétrage </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li class=\"has_sub\">
                                        <a href=\"mail-inbox.html\" onclick=\"WindowOpen1();return false\" style=\"color:#424949 ;\" ><span> Organisation pédagogique </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul class=\"list-unstyled\" style=\"color:white;\">
                                            <li><a href=\"{{ path('calendar') }}\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Facultés et départements</a></li>
                                            <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Filières et classes</a></li>
                                            <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Nationalité et pays</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has_sub\">
                                        <a href=\"mail-inbox.html\" class=\"waves-effect\" style=\"color:#424949 ;\"><span> Frais de scolarite et dossier </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul class=\"list-unstyled\" style=\"color:white;\">
                                            <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >les pièces à fournir</a></li>
                                            <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >tarifs globaux</a></li>
                                            <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Frais ee scolarité par classe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-content-paste\"></i><span> Porte-feuille étudiants </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Gestions des étudiants</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >liste de tous les étudiants</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Numéros de télépnone</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Inscription par date</a></li>
                                        <li><a href=\"mail-read.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Récap global des éffectifs</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-storage\"></i><span> School Docs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Demande de stage</a></li>
                                        <li><a href=\"mail-compose.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Préinscription</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-data-usage\"></i><span> Requetes </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par niveau</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par faculté</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par département</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par filière</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par classe</a></li>
                                        <li><a href=\"mail-inbox.html\" style=\"color:#FFFFFF ;\" onMouseOver=\"this.style.color='#424949'\" onMouseOut=\"this.style.color='#FFFFFF'\"  >Liste des étudiant par spécialité</a></li>
                                </ul>
                            </li>

                            
                        </ul>
                        {# <div class=\"clearfix\"></div> #}
                    </div>
                    {# <div class=\"clearfix\"></div> #}
                </div>
            </div>
            <!-- Left Sidebar End --> 


{% endblock %}
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
           {% block body %}
           {% endblock %}
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
{% block scripts %}
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{ asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{ asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{ asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{ asset('assets/js/jquery.app.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.todo.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.chat.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.dashboard.js')}}\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    {% endblock %}
    </body>
</html>


", "::base.html.twig", "/var/www/html/temp/app/Resources/views/base.html.twig");
    }
}
