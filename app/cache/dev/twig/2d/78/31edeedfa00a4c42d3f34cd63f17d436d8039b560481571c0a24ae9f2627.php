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
        return array (  91 => 35,  79 => 29,  70 => 26,  62 => 24,  50 => 15,  42 => 12,  30 => 5,  24 => 2,  19 => 1,  87 => 21,  80 => 19,  73 => 15,  69 => 14,  64 => 12,  45 => 7,  40 => 5,  32 => 6,  21 => 1,  225 => 76,  220 => 71,  217 => 70,  212 => 67,  207 => 60,  201 => 58,  194 => 54,  189 => 52,  185 => 51,  182 => 50,  180 => 49,  171 => 43,  168 => 42,  165 => 41,  160 => 35,  155 => 22,  145 => 18,  137 => 19,  134 => 18,  127 => 19,  124 => 18,  114 => 18,  104 => 11,  99 => 7,  96 => 25,  90 => 77,  88 => 76,  81 => 70,  77 => 68,  59 => 36,  57 => 10,  44 => 25,  41 => 24,  39 => 11,  35 => 9,  26 => 3,  156 => 77,  148 => 19,  144 => 69,  132 => 63,  128 => 62,  125 => 61,  117 => 19,  115 => 58,  110 => 13,  107 => 12,  103 => 46,  94 => 42,  85 => 39,  83 => 30,  78 => 36,  75 => 28,  71 => 34,  68 => 62,  66 => 25,  61 => 11,  58 => 30,  53 => 8,  46 => 14,  43 => 6,  36 => 4,  33 => 6,  28 => 5,);
    }
}
