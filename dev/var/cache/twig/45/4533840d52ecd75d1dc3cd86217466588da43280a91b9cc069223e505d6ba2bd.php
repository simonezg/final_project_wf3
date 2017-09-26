<?php

/* connexion.html.twig */
class __TwigTemplate_aa327fd843872edaa6614dde452c4ea14ac4677be0e0a80f489a997ecfd5997f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "connexion.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <legend style=\"text-align : center;\">Identifiez vous</legend>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"radios\">Vous êtes : </label>
                    <div class=\"col-md-4\">
                        <div class=\"radio\">
                            <label for=\"radios-0\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-0\" value=\"client\">
                            Client
                            </label>
                        </div>
                        <div class=\"radio\">
                            <label for=\"radios-1\">
                              <input type=\"radio\" name=\"radios\" id=\"radios-1\" value=\"salarié\">
                              Collecteur
                            </label>
                        </div>
                        <div class=\"radio\">
                          <label for=\"radios-2\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-2\" value=\"admin\">
                            Administrateur
                          </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"email\">Votre identifiant</label>  
                    <div class=\"col-md-4\">
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                        <span>Identifiant oublié : Merci de contacter Les Alchimistes</span> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"password\">Votre mot de passe</label>  
                    <div class=\"col-md-4\">
                        <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
                        <span>Mot de passe oublié : Merci de contacter Les Alchimistes</span>  
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"submitButton\"></label>
                    <div class=\"col-md-4\">
                      <button id=\"submitButton\" name=\"submitButton\" class=\"btn btn-primary\" type=\"submit\">Connexion à votre espace</button>
                    </div>
                </div>
            </fieldset>
        </form>
    
";
    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "connexion.html.twig", "C:\\xampp\\htdocs\\alsaleh_keita\\final_project_wf3\\dev\\templates\\connexion.html.twig");
    }
}
