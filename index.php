<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>7ute :: Cours</title>
        <meta name="robots" content="noindex, nofollow">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">

        <style media="screen">
            code {
                color: #ff5722; /*#e83e8c*/
                box-shadow: 0 0 0 3px #f0f0f0;
                background: #f0f0f0;
                margin: 0 3px;
            }
            h3 {
                background: #FFF;
                padding-bottom: 1rem;
                border-bottom: 1px solid #f0f0f0;
                margin-bottom: 2rem;
                position: sticky;
                z-index: 1;
                top: 0;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <?php include('cours.php') ?>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function (event) {

        });

        $(document).ready(function () {

            $('pre[class]').each(function () {
                var block = this;
                hljs.highlightBlock(block);
            });

            $('a[href^="#"]').on('click', function() {
    			var page = $(this).attr('href');
    			var speed = 750;
    			$('html, body').animate( { scrollTop: $(page).offset().top }, speed );
    			return false;
    		});
        });

        </script>
    </body>
</html>
