<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_dc969a865dc48c632e4cca5184be72c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1176 => 331,  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1140 => 325,  1134 => 324,  1128 => 323,  1112 => 317,  1105 => 316,  1103 => 315,  1100 => 314,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1030 => 301,  1028 => 300,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  997 => 287,  990 => 282,  983 => 280,  980 => 276,  976 => 275,  973 => 274,  970 => 273,  968 => 272,  965 => 271,  957 => 267,  955 => 266,  952 => 265,  945 => 260,  942 => 259,  934 => 254,  930 => 253,  926 => 252,  923 => 251,  921 => 250,  918 => 249,  910 => 245,  908 => 241,  906 => 240,  903 => 239,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  853 => 223,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  826 => 209,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  805 => 200,  802 => 199,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  775 => 187,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  744 => 173,  741 => 172,  733 => 168,  730 => 167,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  700 => 152,  692 => 151,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  421 => 62,  416 => 61,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  369 => 43,  353 => 36,  350 => 35,  345 => 33,  334 => 27,  329 => 26,  290 => 14,  278 => 8,  272 => 6,  269 => 5,  256 => 329,  250 => 326,  248 => 325,  244 => 323,  241 => 322,  236 => 314,  233 => 313,  220 => 296,  218 => 287,  210 => 270,  208 => 265,  200 => 259,  197 => 258,  195 => 249,  187 => 238,  179 => 221,  129 => 145,  124 => 129,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 157,  690 => 453,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  173 => 85,  166 => 205,  161 => 198,  156 => 191,  150 => 75,  112 => 39,  204 => 94,  185 => 68,  167 => 64,  164 => 199,  134 => 157,  388 => 160,  385 => 159,  379 => 47,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 32,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 21,  306 => 128,  301 => 125,  292 => 15,  289 => 119,  287 => 13,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 3,  258 => 330,  254 => 328,  247 => 97,  231 => 307,  226 => 299,  221 => 83,  215 => 286,  202 => 262,  193 => 68,  190 => 239,  183 => 63,  177 => 59,  174 => 213,  169 => 206,  97 => 23,  82 => 26,  356 => 37,  347 => 34,  343 => 159,  335 => 157,  333 => 141,  325 => 138,  323 => 24,  316 => 22,  309 => 141,  302 => 137,  295 => 16,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 327,  245 => 96,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 248,  158 => 56,  140 => 42,  110 => 38,  69 => 13,  86 => 46,  209 => 77,  188 => 69,  182 => 222,  160 => 59,  148 => 74,  90 => 27,  113 => 40,  87 => 26,  65 => 17,  276 => 248,  262 => 236,  260 => 331,  238 => 320,  62 => 16,  49 => 12,  53 => 17,  20 => 1,  99 => 68,  77 => 21,  56 => 12,  23 => 3,  40 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 74,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 64,  426 => 143,  422 => 142,  412 => 60,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 42,  364 => 41,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 23,  313 => 99,  311 => 20,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 4,  263 => 84,  257 => 234,  251 => 80,  246 => 324,  240 => 93,  234 => 89,  228 => 306,  223 => 298,  219 => 70,  213 => 271,  207 => 95,  198 => 74,  181 => 87,  176 => 219,  170 => 60,  168 => 60,  146 => 177,  142 => 56,  128 => 45,  125 => 44,  107 => 37,  38 => 7,  144 => 172,  141 => 171,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 18,  61 => 2,  47 => 9,  94 => 57,  88 => 30,  59 => 13,  91 => 56,  84 => 41,  44 => 8,  105 => 24,  93 => 28,  79 => 32,  76 => 31,  72 => 21,  68 => 30,  27 => 5,  31 => 4,  28 => 3,  25 => 4,  21 => 1,  24 => 2,  225 => 88,  216 => 90,  212 => 78,  205 => 264,  201 => 83,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 192,  154 => 185,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 44,  114 => 108,  104 => 87,  100 => 24,  78 => 24,  75 => 23,  71 => 19,  58 => 14,  34 => 5,  26 => 3,  19 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 178,  145 => 57,  139 => 165,  131 => 156,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 33,  96 => 67,  83 => 24,  80 => 32,  74 => 22,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 9,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 4,  184 => 236,  178 => 86,  171 => 212,  165 => 54,  162 => 53,  157 => 60,  153 => 62,  151 => 184,  143 => 43,  138 => 55,  136 => 164,  133 => 43,  130 => 53,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 43,  92 => 31,  89 => 47,  85 => 25,  81 => 40,  73 => 20,  64 => 3,  60 => 16,  57 => 14,  54 => 13,  51 => 16,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
