<?php

/* SensioHangmanBundle:Game:won.html.twig */
class __TwigTemplate_fc17618186ac14f2218ba24871f05df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioHangmanBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioHangmanBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Hangman Game - You won!";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>Congratulations!</h2>

        <p>
            You found the word <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : null), "html", null, true);
        echo "</strong> and won this party.
        </p>

";
    }

    public function getTemplateName()
    {
        return "SensioHangmanBundle:Game:won.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  77 => 28,  56 => 19,  52 => 18,  120 => 40,  115 => 47,  23 => 1,  40 => 8,  37 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 63,  107 => 36,  38 => 8,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 47,  126 => 45,  109 => 43,  103 => 37,  101 => 32,  70 => 23,  67 => 26,  61 => 20,  47 => 9,  94 => 39,  88 => 36,  59 => 17,  91 => 20,  84 => 28,  74 => 16,  66 => 15,  55 => 15,  44 => 12,  46 => 7,  105 => 24,  96 => 21,  93 => 28,  83 => 18,  79 => 39,  76 => 40,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  31 => 5,  43 => 11,  28 => 3,  32 => 5,  25 => 4,  35 => 7,  29 => 3,  21 => 1,  24 => 4,  22 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 64,  100 => 34,  78 => 41,  75 => 23,  71 => 17,  63 => 24,  58 => 9,  41 => 9,  34 => 11,  26 => 3,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 31,  102 => 63,  98 => 31,  95 => 38,  92 => 37,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 14,  60 => 23,  57 => 11,  54 => 15,  51 => 14,  48 => 8,  45 => 14,  42 => 9,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
