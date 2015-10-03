<?php

/* ExamenHolaBundle:Default:index.html.twig */
class __TwigTemplate_11f5502b74f51d0f87ba665d17f8bcd861aec3b42e1519bb624592560927f26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bc0d9a7eebd73c6ee3add53974b926f76838a83bb1e9511a49bc0ae94920ff5 = $this->env->getExtension("native_profiler");
        $__internal_9bc0d9a7eebd73c6ee3add53974b926f76838a83bb1e9511a49bc0ae94920ff5->enter($__internal_9bc0d9a7eebd73c6ee3add53974b926f76838a83bb1e9511a49bc0ae94920ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExamenHolaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9bc0d9a7eebd73c6ee3add53974b926f76838a83bb1e9511a49bc0ae94920ff5->leave($__internal_9bc0d9a7eebd73c6ee3add53974b926f76838a83bb1e9511a49bc0ae94920ff5_prof);

    }

    public function getTemplateName()
    {
        return "ExamenHolaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
