<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Injection Test Page</title>
        <link rel="stylesheet" href="./css/main.css">
        
    </head>
    <body>
        <p>This page is working!</p>
        <form action="" method="post">
            <input type="tel">
            <script type="text/javascript" id="injection-container" src=""></script>
        </form>
        <script type="text/javascript" src="../js/inject-form.js"></script>
    </body>
</html>