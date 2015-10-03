<?php

/* base.html.twig */
class __TwigTemplate_393f5535ed9c95dbaddd8522ab22872f9a856ad9979c9ee9b88247de974defc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8addbd8c50390337efc0f0965d3f175978ae908b5a5f50a1dbadbc6e58fda6 = $this->env->getExtension("native_profiler");
        $__internal_2b8addbd8c50390337efc0f0965d3f175978ae908b5a5f50a1dbadbc6e58fda6->enter($__internal_2b8addbd8c50390337efc0f0965d3f175978ae908b5a5f50a1dbadbc6e58fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2b8addbd8c50390337efc0f0965d3f175978ae908b5a5f50a1dbadbc6e58fda6->leave($__internal_2b8addbd8c50390337efc0f0965d3f175978ae908b5a5f50a1dbadbc6e58fda6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_19e47e06693053e10eb6ea8894d446627072615a80d4d1e81e06a9caaf2bfe29 = $this->env->getExtension("native_profiler");
        $__internal_19e47e06693053e10eb6ea8894d446627072615a80d4d1e81e06a9caaf2bfe29->enter($__internal_19e47e06693053e10eb6ea8894d446627072615a80d4d1e81e06a9caaf2bfe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_19e47e06693053e10eb6ea8894d446627072615a80d4d1e81e06a9caaf2bfe29->leave($__internal_19e47e06693053e10eb6ea8894d446627072615a80d4d1e81e06a9caaf2bfe29_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cf4938a245911d48acf45ddffd508c463216e89832b2b7c82ab389aa970bf66 = $this->env->getExtension("native_profiler");
        $__internal_9cf4938a245911d48acf45ddffd508c463216e89832b2b7c82ab389aa970bf66->enter($__internal_9cf4938a245911d48acf45ddffd508c463216e89832b2b7c82ab389aa970bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9cf4938a245911d48acf45ddffd508c463216e89832b2b7c82ab389aa970bf66->leave($__internal_9cf4938a245911d48acf45ddffd508c463216e89832b2b7c82ab389aa970bf66_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7673d32082d961adeec37e8c91247f32d80554e87f7e22e0e60519973b375b2b = $this->env->getExtension("native_profiler");
        $__internal_7673d32082d961adeec37e8c91247f32d80554e87f7e22e0e60519973b375b2b->enter($__internal_7673d32082d961adeec37e8c91247f32d80554e87f7e22e0e60519973b375b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7673d32082d961adeec37e8c91247f32d80554e87f7e22e0e60519973b375b2b->leave($__internal_7673d32082d961adeec37e8c91247f32d80554e87f7e22e0e60519973b375b2b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4eca9fff8189b7395a783bc10439f6726ae9ad144717f9886a27724b41181449 = $this->env->getExtension("native_profiler");
        $__internal_4eca9fff8189b7395a783bc10439f6726ae9ad144717f9886a27724b41181449->enter($__internal_4eca9fff8189b7395a783bc10439f6726ae9ad144717f9886a27724b41181449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4eca9fff8189b7395a783bc10439f6726ae9ad144717f9886a27724b41181449->leave($__internal_4eca9fff8189b7395a783bc10439f6726ae9ad144717f9886a27724b41181449_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
