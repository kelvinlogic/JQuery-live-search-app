<!DOCTYPE html>
<html>
<head>
    <title>Ajax search</title>
    <meta charset = "utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="padding-top:5em">
    <div class="navbar navbar-fixed-top navbar-inverse ">
	<div class="navbar-inner">
            <div class="container">
                <a href="index.php" class="brand" >
                    <img src="img/cloud.png" style="width: 32px; height: 32px; "> Cloud Menu
                </a><!--end of brand-->
                <div class="collapse nav-collapse pull-right" style="padding-top: 5px;">
                    <form action="" class="navbar-search">
                        <input type="text" class="search-query search" placeholder="search.."/>
                    </form>
                    <ul class="nav">                         
                        <li class="divider-vertical"></li>
                        <li id="count"><a href='#'><span class="add-on"><i class="icon-filter-white"></i></span> Available <span class='badge'></span></a></li>
                    </ul>
                </div>
            </div>
	</div>
    </div><!--end navbar-->
    <div class="container">
        <div id="content"></div>
        
    </div>
</body>
    <!--javascript -->   
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</html>