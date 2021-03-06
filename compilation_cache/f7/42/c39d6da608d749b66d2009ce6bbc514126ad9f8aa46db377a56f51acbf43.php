<?php

/* base.html */
class __TwigTemplate_f742c39d6da608d749b66d2009ce6bbc514126ad9f8aa46db377a56f51acbf43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/custom.css\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
   <nav class=\"navbar navbar-inverse\" style=\"margin-bottom:0;\">
      <div class=\"container-fluid\">
          <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span> 
              </button>
              <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <ul class=\"nav navbar-nav\">
                  <li class=\"navEl\"><a href=\"#\">Home</a></li>
                  <li class=\"navEl\"><a href=\"#\">Page 1</a></li>
                  <li class=\"navEl\"><a href=\"#\">Page 2</a></li> 
                  <li class=\"navEl\"><a href=\"#\">Page 3</a></li> 
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                  <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
              </ul>
          </div>
      </div>
   </nav>
      ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
   <link href=\"http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\" rel=\"stylesheet\">
   <script src=\"http://code.jquery.com/jquery-1.10.2.js\"></script>
   <script src=\"http://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
  </body>
</html>


<!--";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "       
      ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  91 => 43,  88 => 42,  83 => 7,  69 => 45,  67 => 42,  29 => 7,  21 => 1,);
    }
}
