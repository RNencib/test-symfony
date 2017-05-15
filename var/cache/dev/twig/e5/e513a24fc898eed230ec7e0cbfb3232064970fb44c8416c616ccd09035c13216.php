<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eec7f2e14c815cb4b410e5ccdaba76006c4a515783a226949455616a9d3ecd55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bae5fb484d6d8ab5a57ee1edb3fa71b07201591fbe763c583713cf9533a9589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bae5fb484d6d8ab5a57ee1edb3fa71b07201591fbe763c583713cf9533a9589->enter($__internal_5bae5fb484d6d8ab5a57ee1edb3fa71b07201591fbe763c583713cf9533a9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0e53825a279d272fd9be05fb96ad53a0e97ea39f1158fdbd93118ccffdd55a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e53825a279d272fd9be05fb96ad53a0e97ea39f1158fdbd93118ccffdd55a06->enter($__internal_0e53825a279d272fd9be05fb96ad53a0e97ea39f1158fdbd93118ccffdd55a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bae5fb484d6d8ab5a57ee1edb3fa71b07201591fbe763c583713cf9533a9589->leave($__internal_5bae5fb484d6d8ab5a57ee1edb3fa71b07201591fbe763c583713cf9533a9589_prof);

        
        $__internal_0e53825a279d272fd9be05fb96ad53a0e97ea39f1158fdbd93118ccffdd55a06->leave($__internal_0e53825a279d272fd9be05fb96ad53a0e97ea39f1158fdbd93118ccffdd55a06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87a6da7f31e14d8131d5cc019b6584239fa774780ccf3dac9e676156f1be8240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a6da7f31e14d8131d5cc019b6584239fa774780ccf3dac9e676156f1be8240->enter($__internal_87a6da7f31e14d8131d5cc019b6584239fa774780ccf3dac9e676156f1be8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7109f05763d81d74f093227e308a73a7bde733d642f68f13148dd2ba0af9cfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7109f05763d81d74f093227e308a73a7bde733d642f68f13148dd2ba0af9cfc4->enter($__internal_7109f05763d81d74f093227e308a73a7bde733d642f68f13148dd2ba0af9cfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7109f05763d81d74f093227e308a73a7bde733d642f68f13148dd2ba0af9cfc4->leave($__internal_7109f05763d81d74f093227e308a73a7bde733d642f68f13148dd2ba0af9cfc4_prof);

        
        $__internal_87a6da7f31e14d8131d5cc019b6584239fa774780ccf3dac9e676156f1be8240->leave($__internal_87a6da7f31e14d8131d5cc019b6584239fa774780ccf3dac9e676156f1be8240_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9536581e162591ad4cf192cf7d303dab9d7aeaad7400549d5f9fc26e13b12f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9536581e162591ad4cf192cf7d303dab9d7aeaad7400549d5f9fc26e13b12f5e->enter($__internal_9536581e162591ad4cf192cf7d303dab9d7aeaad7400549d5f9fc26e13b12f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc45d440057f1fe3c8e86408f1725ed7d7996bbf1f1386835f31cc0e10fd90a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc45d440057f1fe3c8e86408f1725ed7d7996bbf1f1386835f31cc0e10fd90a6->enter($__internal_cc45d440057f1fe3c8e86408f1725ed7d7996bbf1f1386835f31cc0e10fd90a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc45d440057f1fe3c8e86408f1725ed7d7996bbf1f1386835f31cc0e10fd90a6->leave($__internal_cc45d440057f1fe3c8e86408f1725ed7d7996bbf1f1386835f31cc0e10fd90a6_prof);

        
        $__internal_9536581e162591ad4cf192cf7d303dab9d7aeaad7400549d5f9fc26e13b12f5e->leave($__internal_9536581e162591ad4cf192cf7d303dab9d7aeaad7400549d5f9fc26e13b12f5e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b98c6133993bed2f5d30e1c8340cd5b1347e5ddf5c22da861021c46b5229243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b98c6133993bed2f5d30e1c8340cd5b1347e5ddf5c22da861021c46b5229243->enter($__internal_9b98c6133993bed2f5d30e1c8340cd5b1347e5ddf5c22da861021c46b5229243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_541854f3f25ebd9b5dd6a8321f627c2468be4c1043ec6d310007c96b02a7ebed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541854f3f25ebd9b5dd6a8321f627c2468be4c1043ec6d310007c96b02a7ebed->enter($__internal_541854f3f25ebd9b5dd6a8321f627c2468be4c1043ec6d310007c96b02a7ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_541854f3f25ebd9b5dd6a8321f627c2468be4c1043ec6d310007c96b02a7ebed->leave($__internal_541854f3f25ebd9b5dd6a8321f627c2468be4c1043ec6d310007c96b02a7ebed_prof);

        
        $__internal_9b98c6133993bed2f5d30e1c8340cd5b1347e5ddf5c22da861021c46b5229243->leave($__internal_9b98c6133993bed2f5d30e1c8340cd5b1347e5ddf5c22da861021c46b5229243_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
