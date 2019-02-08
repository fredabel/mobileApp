<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile App Training</title>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
</head>
<body>

    <!-- Start of first page -->
    <div data-role="page" id="foo">
    
        <div data-role="header">
            <h1>Hello World</h1>
        </div><!-- /header -->
    
        <div role="main" class="ui-content">
            <a href="#home" class="ui-btn">Home</a>
            <a href="#bar" class="ui-btn">Blog</a>
            <a href="#bar" class="ui-btn">Settings</a>
        </div><!-- /content -->
        <?php 

        echo 'dsdasdsa';
        
        ?>
        <div data-role="footer" data-position="fixed">
            <h4>Footer</h4>
        </div><!-- /footer -->
    </div><!-- /page -->
    



    <!-- Start of second page -->
    <div data-role="page" id="home">
    
        <div data-role="header">
            <h1>Home</h1>
        </div><!-- /header -->
    
        <div role="main" class="ui-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ipsam accusantium porro quibusdam nesciunt obcaecati magni nobis cumque! Debitis recusandae voluptatum sunt quae? Vel facere quas obcaecati, quam dignissimos neque!</p>
            <br><br>
            <a href="#foo" class="ui-btn">Back to menu</a>
        </div><!-- /content -->
    




        <div data-role="footer" data-position="fixed">
            <h4>Footer</h4>
        </div><!-- /footer -->
    </div><!-- /page -->
    </body>
</html>