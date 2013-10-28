<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>HTML</title>
        <meta name="description" content="">
        <meta name="author" content="Bryan Kotjan">
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css" />        
    </head>

    <body>
        <div>
            <header>
                <h1>HTML</h1>
            </header>
            <nav>
                <p>
                    <a href="#" rel="tooltip" data-original-title="fun fun fun!">Home</a>
                </p>
                <p>
                    <a href="/contact">Contact</a>
                </p>
            </nav>

            <div>
                <div class="container text-center">
                    <img src="http://images.nationalgeographic.com/wpf/media-live/photos/000/021/cache/arches-sandstone-formations_2102_600x450.jpg" class="img-responsive inline" alt="Responsive image">
                    <p>
                        <button type="button" class="btn btn-primary btn-lg">
                            Large button
                        </button>
                        <button type="button" class="btn btn-default btn-lg">
                            Large button
                        </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary">
                            Default button
                        </button>
                        <button type="button" class="btn btn-default">
                            Default button
                        </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary btn-sm">
                            Small button
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                            Small button
                        </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary btn-xs">
                            Extra small button
                        </button>
                        <button type="button" class="btn btn-default btn-xs">
                            Extra small button
                        </button>
                    </p>
                </div>
            </div>

            <footer>
                <p>
                    &copy; Copyright  by Bryan Kotjan
                </p>
            </footer>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/tooltip.js"></script>
        <script type="text/javascript">
            $(function() {
                $("[rel='tooltip']").tooltip();
                $(".btn-lg").on('click', function(){
                    console.log('test test');
                });
            });
        </script>
    </body>
</html>
