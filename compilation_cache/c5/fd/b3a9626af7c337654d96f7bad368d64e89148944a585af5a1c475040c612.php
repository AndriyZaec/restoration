<?php

/* index2.html */
class __TwigTemplate_c5fdb3a9626af7c337654d96f7bad368d64e89148944a585af5a1c475040c612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index2.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home page";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container-fluid\" style=\"padding:0\">
<section class=\"section1\">
<div style=\"position: relative;margin: 0 auto;width: 100%;\">
              <div class=\"row\">
               <div class=\"col-sm-6\">
                <div id=\"myCarousel\" class=\"carousel slide slider\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"img/r1.jpg\" alt=\"Chania\">
      <div class=\"carousel-caption\">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class=\"item\">
      <img src=\"img/r1.jpg\" alt=\"Chania\">
      <div class=\"carousel-caption\">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class=\"item\">
      <img src=\"img/r1.jpg\" alt=\"Flower\">
      <div class=\"carousel-caption\">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class=\"item\">
      <img src=\"img/r1.jpg\" alt=\"Flower\">
      <div class=\"carousel-caption\">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
    </div>
    <h3 style=\"text-align:center;\"><strong>Вас вітає сервіс <i>Armadillo</i>.</strong></h3>
   <div class=\"textBlock\">
    <span >Armadillo - з англійської перекладається, як <strong> броненосець           </strong>логічно було б продавати цих перкрасних тваринок, але ми             просто сервіс бронювання столиків у ресторанах ;)</span>
        <hr>
        <span>Завдяки нашому сервісу ви зможете - <b>швидко</b>, <b>зручно</b>
            та <b>без лишніх дій</b> замовити столик у найкращих ресторанах та пабах. </span><br><br>
            <input type=\"button\" class=\"orderBtn\" value=\"ЗАМОВИТИ\" onclick=\"\">
    
                 </div> 
                </div>
            </div>
            </div>
        </section>
        <section class=\"section2\">
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
            <p>sadddddddddddddddddddddddddddddddddddddddasdsada</p>
        </section>
    
    </div>       
";
    }

    public function getTemplateName()
    {
        return "index2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
