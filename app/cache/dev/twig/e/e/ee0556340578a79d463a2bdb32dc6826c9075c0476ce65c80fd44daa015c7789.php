<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_abc3411af903b828247ec68e98ed76b1b0cdd8237bff7e9c1c4309ff63fcfd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d5f5c3a20b2b46d149d9b392c4e08fe5cea2f0e9e764070f3ed0394c041ca03 = $this->env->getExtension("native_profiler");
        $__internal_6d5f5c3a20b2b46d149d9b392c4e08fe5cea2f0e9e764070f3ed0394c041ca03->enter($__internal_6d5f5c3a20b2b46d149d9b392c4e08fe5cea2f0e9e764070f3ed0394c041ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d5f5c3a20b2b46d149d9b392c4e08fe5cea2f0e9e764070f3ed0394c041ca03->leave($__internal_6d5f5c3a20b2b46d149d9b392c4e08fe5cea2f0e9e764070f3ed0394c041ca03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_beb77f0793fdbccaa8e698f966e4bc17c26ccdcfc24e0c6575c5f60ce8656258 = $this->env->getExtension("native_profiler");
        $__internal_beb77f0793fdbccaa8e698f966e4bc17c26ccdcfc24e0c6575c5f60ce8656258->enter($__internal_beb77f0793fdbccaa8e698f966e4bc17c26ccdcfc24e0c6575c5f60ce8656258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_beb77f0793fdbccaa8e698f966e4bc17c26ccdcfc24e0c6575c5f60ce8656258->leave($__internal_beb77f0793fdbccaa8e698f966e4bc17c26ccdcfc24e0c6575c5f60ce8656258_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f3c542ca67c451cc4366c8791874ab8e13e85e038a8be15e19f9b31822e2b9 = $this->env->getExtension("native_profiler");
        $__internal_13f3c542ca67c451cc4366c8791874ab8e13e85e038a8be15e19f9b31822e2b9->enter($__internal_13f3c542ca67c451cc4366c8791874ab8e13e85e038a8be15e19f9b31822e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_13f3c542ca67c451cc4366c8791874ab8e13e85e038a8be15e19f9b31822e2b9->leave($__internal_13f3c542ca67c451cc4366c8791874ab8e13e85e038a8be15e19f9b31822e2b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9190bd665c263be1c7651c2af812facd40954e7854db4e38aeb6b553d3f614d5 = $this->env->getExtension("native_profiler");
        $__internal_9190bd665c263be1c7651c2af812facd40954e7854db4e38aeb6b553d3f614d5->enter($__internal_9190bd665c263be1c7651c2af812facd40954e7854db4e38aeb6b553d3f614d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9190bd665c263be1c7651c2af812facd40954e7854db4e38aeb6b553d3f614d5->leave($__internal_9190bd665c263be1c7651c2af812facd40954e7854db4e38aeb6b553d3f614d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
