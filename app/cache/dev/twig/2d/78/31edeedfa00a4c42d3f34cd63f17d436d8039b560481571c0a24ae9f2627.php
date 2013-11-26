<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_2d7831edeedfa00a4c42d3f34cd63f17d436d8039b560481571c0a24ae9f2627 extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  26 => 3,  24 => 2,  19 => 1,  96 => 25,  87 => 21,  73 => 15,  66 => 25,  64 => 12,  61 => 11,  57 => 10,  53 => 8,  43 => 6,  32 => 6,  21 => 1,  232 => 76,  213 => 67,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  156 => 22,  149 => 19,  146 => 18,  138 => 19,  128 => 19,  125 => 18,  118 => 19,  115 => 18,  108 => 12,  100 => 7,  97 => 6,  91 => 35,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 14,  67 => 41,  60 => 36,  58 => 35,  42 => 12,  40 => 5,  36 => 4,  34 => 6,  27 => 1,  249 => 100,  241 => 94,  237 => 92,  225 => 86,  221 => 71,  218 => 70,  210 => 82,  208 => 60,  203 => 78,  200 => 72,  196 => 69,  187 => 65,  178 => 62,  176 => 61,  171 => 59,  168 => 58,  164 => 57,  161 => 35,  159 => 55,  154 => 54,  151 => 53,  141 => 50,  135 => 18,  132 => 47,  127 => 46,  124 => 45,  119 => 41,  111 => 13,  105 => 11,  102 => 28,  99 => 27,  94 => 36,  80 => 19,  77 => 34,  74 => 27,  71 => 26,  54 => 25,  48 => 23,  45 => 7,  38 => 16,  35 => 15,  30 => 5,);
    }
}
