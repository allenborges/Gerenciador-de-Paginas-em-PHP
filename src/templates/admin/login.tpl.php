</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link real="stylesheet" href="/resources/trix/trix.css">
    <link real="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">


    <title> Painel Administrativo da Scholl of Net</title>
</head>

<body class="d-flex flex-column">
    <div id="header">
        <nav class="bar navbar navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand"> AdminSON</a>
                <span class="navbar-text">
                    Painel Administrativo da Scholl of Net
                </span>
            </span>
        </nav>

    </div>

    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-4 align-self-center">
                <?php include $content ?>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <<script src="/resources/pnotify/pnotify.custom.min.js">
        </script>

        <script>
            <?php flash(); ?>
        </script>

</body>

</html>