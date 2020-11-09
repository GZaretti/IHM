<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* css/styles.css */
class __TwigTemplate_f311692c4e045c22c92ddd8e73346d99b431357773efeb662345039a52372a17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/styles.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/styles.css"));

        // line 1
        echo "body {
    font-family: Calibri, sans-serif;
    background: #fcfaf9;

}

.nav {
    padding: 15px;
    text-align: center;
}
.nav .add-button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
}
.nav .add-button:hover {
    background-color: #3e8e41
}
.nav .add-button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

.grid {
    position: relative;
}

.item {
    display: block;
    position: absolute;
    height: 200px;
    width: 200px;
    line-height: 200px;
    margin: 5px;
    text-align: center;
    z-index: 1;
}

.item.muuri-item-dragging {
    z-index: 3;
}
.item.muuri-item-releasing {
    z-index: 2;
}
.item.muuri-item-hidden {
    z-index: 0;
}

.item.muuri-item-dragging .item-content {
    z-index: 3;
    background: #8993a2;
}
.item.muuri-item-releasing .item-content {
    z-index: 2;
    background: #152c43;
}

.item-content {
    position: relative;
    width: 100%;
    height: 100%;
    cursor: pointer;
    color: #fff;
    background: #59687d;
    font-size: 40px;
    text-align: center;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/styles.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body {
    font-family: Calibri, sans-serif;
    background: #fcfaf9;

}

.nav {
    padding: 15px;
    text-align: center;
}
.nav .add-button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
}
.nav .add-button:hover {
    background-color: #3e8e41
}
.nav .add-button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

.grid {
    position: relative;
}

.item {
    display: block;
    position: absolute;
    height: 200px;
    width: 200px;
    line-height: 200px;
    margin: 5px;
    text-align: center;
    z-index: 1;
}

.item.muuri-item-dragging {
    z-index: 3;
}
.item.muuri-item-releasing {
    z-index: 2;
}
.item.muuri-item-hidden {
    z-index: 0;
}

.item.muuri-item-dragging .item-content {
    z-index: 3;
    background: #8993a2;
}
.item.muuri-item-releasing .item-content {
    z-index: 2;
    background: #152c43;
}

.item-content {
    position: relative;
    width: 100%;
    height: 100%;
    cursor: pointer;
    color: #fff;
    background: #59687d;
    font-size: 40px;
    text-align: center;
}", "css/styles.css", "D:\\Cours\\IHM\\IHM\\notePorject\\templates\\css\\styles.css");
    }
}
