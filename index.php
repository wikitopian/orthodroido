<!DOCTYPE html>
<html>
    <head>
    <title>Orthodroido</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
    <script src="jquery.countdown.js"></script>
    <script type="text/javascript">
    $(function(){
        $('#counter').countdown({
          image: 'img/digits.png',
          startTime: '25:00'
        });
    });

    </script>
    <style type="text/css">
    body {
        background: url(icon.jpg);
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
    }
    .ui-page {
        background: transparent;
    }
    .ui-content{
        background: transparent;
    }
    </style>
</head>
<body> 

<div data-role="page">

    <div data-role="header">
        <h1>Orthodroido</h1>
    </div><!-- /header -->

    <div data-role="content">
        <div id="counter"></div>
    </div><!-- /content -->

    <div data-role="footer">
        <h4>The Footer</h4>
    </div><!-- /header -->
</div><!-- /page -->

</body>
</html>

