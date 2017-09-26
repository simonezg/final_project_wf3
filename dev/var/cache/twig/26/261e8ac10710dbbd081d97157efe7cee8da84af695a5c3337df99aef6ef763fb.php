<?php

/* layout.html.twig */
class __TwigTemplate_926546ac8075819e16250945cf85e661982b1f763ea9e5448882de84c49db097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a4a64501c2799c4f2333118638eff0c7188020c1f178ca9b61c8a528286a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a4a64501c2799c4f2333118638eff0c7188020c1f178ca9b61c8a528286a12->enter($__internal_49a4a64501c2799c4f2333118638eff0c7188020c1f178ca9b61c8a528286a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f4c26e63b9791266dd8724c2bc17241d79aaabc67c7bf7b6c7e5535ffcf717c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4c26e63b9791266dd8724c2bc17241d79aaabc67c7bf7b6c7e5535ffcf717c->enter($__internal_6f4c26e63b9791266dd8724c2bc17241d79aaabc67c7bf7b6c7e5535ffcf717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " Les alchimistes</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>

        <nav class=\"navbar ombrage\">
            <div class=\"container\">
                <div>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"img logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>

                    ";
        // line 29
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 30
            echo "                        ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 31
                echo "                        ";
            } elseif ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 32
                echo "                        ";
            } else {
                echo " 
                            <div class=\"img bloclegende\"><a href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\"><img class=\" une\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/déchets2.png"), "html", null, true);
                echo "\" >Compte Client</a></div>
                        ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "
                    ";
        // line 37
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 38
            echo "                        ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                echo " 
                        ";
            } elseif ($this->getAttribute(            // line 39
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 40
                echo "                            <div class=\"img bloclegende2\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\"><img class=\"img deux\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
                echo "\" >Compte Collecteur</a></div>
                                ";
            } else {
                // line 42
                echo "                        ";
            }
            // line 43
            echo "                    ";
        }
        // line 44
        echo "

                    ";
        // line 46
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 47
            echo "                            ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 48
                echo "                                <div class=\"img bloclegende3\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\"><img class=\"img trois\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/composteur2.png"), "html", null, true);
                echo "\">Compte Alchimistes</a></div>
                            ";
            } elseif ($this->getAttribute(            // line 49
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 50
                echo "                            ";
            } else {
                // line 51
                echo "                        ";
            }
            // line 52
            echo "                    ";
        }
        // line 53
        echo "
                    ";
        // line 54
        if (twig_test_empty($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()))) {
            // line 55
            echo "                        <div class=\"img bloclegende4\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\"><img class=\"img quatre\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plante.png"), "html", null, true);
            echo "\">Connexion</a></div>
                        <div class=\"clear\"></div>
                    ";
        }
        // line 58
        echo "                </div>
                <div>
                    <div class=\"clear\"></div>

                    <div class=\"navresponsive\">
                        <nav class=\"navbar navbar-default \">
                            <div class=\"container-fluid\">
                                ";
        // line 65
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 66
            echo "                                    ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 67
                echo "                                    ";
            } elseif ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 68
                echo "                                    ";
            } else {
                echo " 
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 70
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\">Compte client</a>
                                        </div>
                                    ";
            }
            // line 73
            echo "                                ";
        }
        // line 74
        echo "                                
                                ";
        // line 75
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 76
            echo "                                    ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 77
                echo "                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 78
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\">Compte alchimiste</a>
                                        </div>
                                    ";
            } elseif ($this->getAttribute(            // line 80
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 81
                echo "                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 82
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\">Compte collecteur</a>
                                        </div>
                                    ";
            }
            // line 84
            echo "    
                                ";
        }
        // line 86
        echo "                                
                                ";
        // line 87
        if (twig_test_empty($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()))) {
            echo "<div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a></div>
                                ";
        }
        // line 90
        echo "
                        </nav>
                    </div>                         
                </div>
                        ";
        // line 94
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 95
            echo "                            <div class=\" col-lg-12 col-md-12 col-xs-12 col-sm-12\" style=\"text-align: right;\">
                                <span style=\"font-size:1.7em;font-weight: bold;\">Bonjour ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "firstname", array()), "html", null, true);
            echo "</span>
                                <br>
                                <a style=\"font-size:1.3em;font-weight: bold;\" href=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a>
                            </div>
                        ";
        }
        // line 101
        echo "                    </div>
                </nav>
                <div>
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 105
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 106
                echo "                            ";
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 107
                echo "                            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "                </div>
                ";
        // line 113
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_49a4a64501c2799c4f2333118638eff0c7188020c1f178ca9b61c8a528286a12->leave($__internal_49a4a64501c2799c4f2333118638eff0c7188020c1f178ca9b61c8a528286a12_prof);

        
        $__internal_6f4c26e63b9791266dd8724c2bc17241d79aaabc67c7bf7b6c7e5535ffcf717c->leave($__internal_6f4c26e63b9791266dd8724c2bc17241d79aaabc67c7bf7b6c7e5535ffcf717c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3314ea8a3ecb8a25e9eea8c7a277f0253e199a0a800ba765e0e00f348ea163d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3314ea8a3ecb8a25e9eea8c7a277f0253e199a0a800ba765e0e00f348ea163d3->enter($__internal_3314ea8a3ecb8a25e9eea8c7a277f0253e199a0a800ba765e0e00f348ea163d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe4fa186e415187c3dc8a747331fd6e363765d1761cd55c4a0c8a45f2afa1abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4fa186e415187c3dc8a747331fd6e363765d1761cd55c4a0c8a45f2afa1abe->enter($__internal_fe4fa186e415187c3dc8a747331fd6e363765d1761cd55c4a0c8a45f2afa1abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_fe4fa186e415187c3dc8a747331fd6e363765d1761cd55c4a0c8a45f2afa1abe->leave($__internal_fe4fa186e415187c3dc8a747331fd6e363765d1761cd55c4a0c8a45f2afa1abe_prof);

        
        $__internal_3314ea8a3ecb8a25e9eea8c7a277f0253e199a0a800ba765e0e00f348ea163d3->leave($__internal_3314ea8a3ecb8a25e9eea8c7a277f0253e199a0a800ba765e0e00f348ea163d3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bca96da5dc723bb7f93d90a0eacf2a64ea05a8143ddbfc331bede9e6c06f6c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca96da5dc723bb7f93d90a0eacf2a64ea05a8143ddbfc331bede9e6c06f6c66->enter($__internal_bca96da5dc723bb7f93d90a0eacf2a64ea05a8143ddbfc331bede9e6c06f6c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_63477f4d1b32563c510b3febf1c031c757259b7366e1bb491de580218d42337b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63477f4d1b32563c510b3febf1c031c757259b7366e1bb491de580218d42337b->enter($__internal_63477f4d1b32563c510b3febf1c031c757259b7366e1bb491de580218d42337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/collector.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_63477f4d1b32563c510b3febf1c031c757259b7366e1bb491de580218d42337b->leave($__internal_63477f4d1b32563c510b3febf1c031c757259b7366e1bb491de580218d42337b_prof);

        
        $__internal_bca96da5dc723bb7f93d90a0eacf2a64ea05a8143ddbfc331bede9e6c06f6c66->leave($__internal_bca96da5dc723bb7f93d90a0eacf2a64ea05a8143ddbfc331bede9e6c06f6c66_prof);

    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
        $__internal_e416aa7b4f43f081adf083b2b04308d619e11447e1a16aeeeba121146eaf73b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e416aa7b4f43f081adf083b2b04308d619e11447e1a16aeeeba121146eaf73b1->enter($__internal_e416aa7b4f43f081adf083b2b04308d619e11447e1a16aeeeba121146eaf73b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a66d2a4ad5785c2e740fa4bd2475b4ca0cbd979a2fe97caa0c08a1f6682591ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66d2a4ad5785c2e740fa4bd2475b4ca0cbd979a2fe97caa0c08a1f6682591ae->enter($__internal_a66d2a4ad5785c2e740fa4bd2475b4ca0cbd979a2fe97caa0c08a1f6682591ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 111
        echo "                    ";
        
        $__internal_a66d2a4ad5785c2e740fa4bd2475b4ca0cbd979a2fe97caa0c08a1f6682591ae->leave($__internal_a66d2a4ad5785c2e740fa4bd2475b4ca0cbd979a2fe97caa0c08a1f6682591ae_prof);

        
        $__internal_e416aa7b4f43f081adf083b2b04308d619e11447e1a16aeeeba121146eaf73b1->leave($__internal_e416aa7b4f43f081adf083b2b04308d619e11447e1a16aeeeba121146eaf73b1_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_428b54a9e1892647e1faeefb300a10977ed0b1c8ea45829bf59188d1230c6ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428b54a9e1892647e1faeefb300a10977ed0b1c8ea45829bf59188d1230c6ec2->enter($__internal_428b54a9e1892647e1faeefb300a10977ed0b1c8ea45829bf59188d1230c6ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8cf035e27cdb9c20b414d365342e10a660012b795f555b478323ae27cc5cd6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf035e27cdb9c20b414d365342e10a660012b795f555b478323ae27cc5cd6d5->enter($__internal_8cf035e27cdb9c20b414d365342e10a660012b795f555b478323ae27cc5cd6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_8cf035e27cdb9c20b414d365342e10a660012b795f555b478323ae27cc5cd6d5->leave($__internal_8cf035e27cdb9c20b414d365342e10a660012b795f555b478323ae27cc5cd6d5_prof);

        
        $__internal_428b54a9e1892647e1faeefb300a10977ed0b1c8ea45829bf59188d1230c6ec2->leave($__internal_428b54a9e1892647e1faeefb300a10977ed0b1c8ea45829bf59188d1230c6ec2_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 118,  392 => 117,  387 => 114,  378 => 113,  368 => 111,  359 => 110,  345 => 17,  341 => 16,  337 => 15,  333 => 14,  328 => 11,  319 => 10,  301 => 8,  291 => 113,  288 => 112,  285 => 110,  279 => 109,  268 => 107,  261 => 106,  256 => 105,  252 => 104,  247 => 101,  241 => 98,  236 => 96,  233 => 95,  231 => 94,  225 => 90,  220 => 88,  216 => 87,  213 => 86,  209 => 84,  203 => 82,  200 => 81,  198 => 80,  193 => 78,  190 => 77,  187 => 76,  185 => 75,  182 => 74,  179 => 73,  173 => 70,  167 => 68,  164 => 67,  161 => 66,  159 => 65,  150 => 58,  141 => 55,  139 => 54,  136 => 53,  133 => 52,  130 => 51,  127 => 50,  125 => 49,  118 => 48,  115 => 47,  113 => 46,  109 => 44,  106 => 43,  103 => 42,  95 => 40,  93 => 39,  88 => 38,  86 => 37,  83 => 36,  80 => 35,  73 => 33,  68 => 32,  65 => 31,  62 => 30,  60 => 29,  53 => 27,  45 => 21,  43 => 10,  38 => 8,  29 => 1,);
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
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title '' %} Les alchimistes</title>

        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"{{ asset('css/homepage.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('css/collector.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('css/menuadmin.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>

        <nav class=\"navbar ombrage\">
            <div class=\"container\">
                <div>
                    <a href=\"{{path('homepage')}}\"><img class=\"img logo\" src=\"{{asset('images/Alchimiste_logo.png')}}\"></a>

                    {% if user_manager.user %}
                        {% if user_manager.admin%}
                        {% elseif  user_manager.collector %}
                        {% else %} 
                            <div class=\"img bloclegende\"><a href=\"{{path('compteclient')}}\"><img class=\" une\" src=\"{{asset('images/déchets2.png')}}\" >Compte Client</a></div>
                        {% endif %}
                    {% endif %}

                    {% if user_manager.user %}
                        {% if user_manager.admin %} 
                        {% elseif  user_manager.collector %}
                            <div class=\"img bloclegende2\"><a href=\"{{path('comptecollecteur')}}\"><img class=\"img deux\" src=\"{{asset('images/velo.png')}}\" >Compte Collecteur</a></div>
                                {% else %}
                        {% endif %}
                    {% endif %}


                    {% if user_manager.user %}
                            {% if user_manager.admin %}
                                <div class=\"img bloclegende3\"><a href=\"{{path('compteadmin')}}\"><img class=\"img trois\" src=\"{{asset('images/composteur2.png')}}\">Compte Alchimistes</a></div>
                            {% elseif  user_manager.collector %}
                            {% else %}
                        {% endif %}
                    {% endif %}

                    {% if user_manager.user is empty %}
                        <div class=\"img bloclegende4\"><a href=\"{{path('connexion')}}\"><img class=\"img quatre\" src=\"{{asset('images/plante.png')}}\">Connexion</a></div>
                        <div class=\"clear\"></div>
                    {% endif %}
                </div>
                <div>
                    <div class=\"clear\"></div>

                    <div class=\"navresponsive\">
                        <nav class=\"navbar navbar-default \">
                            <div class=\"container-fluid\">
                                {% if user_manager.user %}
                                    {% if user_manager.admin%}
                                    {% elseif  user_manager.collector %}
                                    {% else %} 
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('compteclient')}}\">Compte client</a>
                                        </div>
                                    {% endif %}
                                {% endif %}
                                
                                {% if user_manager.user %}
                                    {% if user_manager.admin %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('compteadmin')}}\">Compte alchimiste</a>
                                        </div>
                                    {% elseif  user_manager.collector %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('comptecollecteur')}}\">Compte collecteur</a>
                                        </div>
                                    {% endif %}    
                                {% endif %}
                                
                                {% if user_manager.user is empty %}<div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Connexion</a></div>
                                {% endif %}

                        </nav>
                    </div>                         
                </div>
                        {% if user_manager.user %}
                            <div class=\" col-lg-12 col-md-12 col-xs-12 col-sm-12\" style=\"text-align: right;\">
                                <span style=\"font-size:1.7em;font-weight: bold;\">Bonjour {{ user_manager.firstname }}</span>
                                <br>
                                <a style=\"font-size:1.3em;font-weight: bold;\" href=\"{{path('deconnexion')}}\">Deconnexion</a>
                            </div>
                        {% endif %}
                    </div>
                </nav>
                <div>
                    {% for type, flashes in app.session.flashbag.all %}
                        {% for  flash in flashes %}
                            {% if type == 'error' %} {% set type = 'danger' %} {% endif %}
                            <div class=\"alert alert-{{type}}\"> {{ flash | raw }} </div>
                        {% endfor %}
                    {% endfor %}
                    {% block content %}
                    {% endblock %}
                </div>
                {% block javascripts %}
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script src=\"{{asset('js/homepagescript.js')}}\"></script>
                    <script src=\"{{asset('js/menu.js')}}\"></script>
                {% endblock %}", "layout.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
