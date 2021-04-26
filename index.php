<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>FaaS</title>

    <!--    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">-->

    <!--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <!--    <script src="codemirror/lib/codemirror.js"></script>-->

    <!--    <script src="/js/jloads.js" type="text/javascript"></script>-->
    <!--        <script src="//user.jloads.com/faas.js" type="text/javascript"></script>-->

    <style>
        /* GLOBAL */
        img {
            max-width: 100%;
            max-height: 100%;
            display: block; /* remove extra space below image */
        }

        body {
            /*background-color: #fb7e14;*/
            color: #333333;
            font-family: Tahoma;
            margin:0 !important;
            padding:0 !important;
        }

        h2, h3 {
            font-size: medium;
        }

        table th {
            font-weight: bolder;
        }

        table td {
            padding-right: 5px;
            /*font-weight: normal;*/
        }

        /* MODULES  Size */
        .jloads.content,
        .footer,
        nav {
            margin: auto auto;
            width: 100%;
            max-width: 900px;
        }

        .jloads.content > div {
            /*border: 1px solid black;*/
            /*height: 100px;*/
            margin: 0px;
            padding: 4px;
        }

        nav {
            display: inline-flex !important;
            background-color: #fb7e14;
            color: #333333;
        }
        #usermenu a {
            color: white;
            font-size: medium;
        }
        #usermenu {
            margin: 0 auto 0 auto;
            /*padding: 0;*/
            padding-top: 4px;
            width: 400px;
            right:0px;
            text-align: right;
        }

        #menu {
            margin: 0 0 0 5px;
            padding: 0;
            /*padding-top: 13px;*/
            /*width: 750px;*/
        }

        #menu a {
            color: #fb7e14;
            font-size: medium;
        }

        #images {
            padding: 0px;
            /*width: 170px;*/
            height: 40px;
            max-height: 40px;
        }

        #forms {
            min-height: 210px;
        }

        #messages {
            height: 120px;
            /*max-height: 100px;*/
            overflow: scroll;
            color: black;
        }
    </style>


    <script src="//get.jloads.com/jloads.min.js">
        // Jloads is loading any media and content dynamically
    </script>

    <script>
        // load content ASAP with dependencies, that jquery must be first and after that bootstrap
        jl.file({
            "//code.jquery.com/jquery-3.5.1.min.js": [
                "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
                "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            ]
        });
    </script>

    <script>
        // Load core of application
        jl.target(<?php
            include_once('Base58.php');

            function url($filename)
            {
                if(strlen($filename) > 7){
                    exit();
                }
                $json = file_get_contents("config/" . $filename . ".json");
//    echo $json;
//                $encoded = (new SulacoTech\Base58())->encode($json);
//    echo $encoded;
//    return "http://" . $encoded . ".base58.ipaas.pl/";
//                return "http://" . $encoded . ".base64.ipaas.pl/";
                return $json;
            }


            $subdomain_encoded = array_shift((explode('.', $_SERVER['HTTP_HOST'])));
            echo url($subdomain_encoded);
//            echo base58_decode($subdomain_encoded);
          ?>);
    </script>

    <script>
        // Load dynamically contents depends url #hash
        jl.url({
            "#app-create": {
                "#forms": {
                    "form/plesk.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#app-list": {
                "#forms": {
                    "form/plesk.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#env-list": {
                "#forms": {
                    "form/plesk.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#domain-list": {
                "#forms": {
                    "form/plesk.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#plesk": {
                "#forms": {
                    "form/plesk.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#app": {
                "#forms": {
                    "form/app.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#app_man": {
                "#forms": {
                    "form/app_man.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#server": {
                "#forms": {
                    "form/server.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#webservice": {
                "#forms": {
                    "form/webservice.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#cloud": {
                "#forms": {
                    "form/cloud.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#local": {
                "#forms": {
                    "form/local.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#iot": {
                "#forms": {
                    "form/iot.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#api": {
                "#forms": {
                    "form/api.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#api_func": {
                "#forms": {
                    "form/api_func.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#api_storage": {
                "#forms": {
                    "form/api_storage.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            },
            "#test": {
                "#forms": {
                    "form/test.html": [
                        "form/submit.js",
                        "form/edit_list.js"
                    ]
                }
            }
        });
    </script>



    <script>
        /*
                jl.file({
                    "codemirror/lib/codemirror.js": [
                        // "cdn/jquery-3.2.1.min.js",
                        // "codemirror/lib/codemirror.js",
                        "codemirror/addon/search/searchcursor.js",
                        "codemirror/addon/search/search.js",
                        "codemirror/addon/dialog/dialog.js",
                        "codemirror/addon/edit/matchbrackets.js",
                        "codemirror/addon/edit/closebrackets.js",
                        "codemirror/addon/comment/comment.js",
                        "codemirror/addon/wrap/hardwrap.js",
                        "codemirror/addon/fold/foldcode.js",
                        "codemirror/addon/fold/brace-fold.js",
                        "codemirror/mode/javascript/javascript.js",
                        "codemirror/keymap/sublime.js",
                        "codemirror/lib/codemirror.css",
                        "codemirror/addon/fold/foldgutter.css",
                        "codemirror/addon/dialog/dialog.css",
                        "codemirror/theme/monokai.css"
                    ],
                });
        */

    </script>


</head>
<body>

<div class="container fade-in" id="jloads">
    <!-- Content here -->
    <div class="jloads content">
        <nav>
            <a id="images" href="/"></a>
            <div id="usermenu"></div>
        </nav>
        <div id="menu"></div>

        <div id="forms"></div>

        <div id="apps"></div>

        <div id="messages" class="messages">
        </div>
    </div>

    <footer></footer>
</div>

</body>
</html>
