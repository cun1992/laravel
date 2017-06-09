<html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<!--
<title>Plain Shane Design > CSS Drop Down Demo</title>
body { background:#444;} -->
<style type="text/css">
    *{margin:0; padding: 0;}


    #navcont { background: #fff; width: 100%;}
    #nav { font-family: helvetica; position:relative; width:377px; height:56px; font-size:14px; color:#999;
        margin: 0 auto; }
    #nav ul { list-style-type:none; }
    #nav ul li { float:left; position: relative;}
    #nav ul li a { border-right:1px solid #e9e9e9; padding:20px; display:block; text-decoration:none; text-
    align:center; color:#999;}
    #nav ul li a:hover {background: #12aeef url(http://files.jb51.net/demoimg/200912/shadow.png) repeat-x;;
        color:#fff;}
    #nav ul li ul {display: none;}
    #nav ul li:hover ul {display: block; position: absolute; top:56px; min-width:190px; left:0;}
    #nav ul li:hover ul li a {display:block; background:#12aeef; color:#ffffff; width: 110px; text-align:
    center; border-bottom: 1px solid #f2f2f2; border-right: none;}
    #nav ul li:hover ul li a:hover { background:#6dc7ec; color:#ffffff; }
    .borderleft {border-left: 1px solid #e9e9e9;}
    .top { border-top: 1px solid #f2f2f2;}
    /*  This piece of code is for a third level drop down menu and is not included in this tutorial  #nav ul
   li:hover ul li ul {display:none;}
    #nav ul li:hover ul li:hover ul {display:block; position: absolute; top:-1px; left: 151px;}*/
    /* Ignore this last piece of code */
    #threestyles {
        width: 500px;
        height: 300px;
        margin: 0px auto;
        border: 2px solid #666;
        margin-top: 30px;
    }
</style>


<div id="navcont">
    <div id="nav">
        <ul>
            <li class="borderleft"><a href="http://localhost/laravel-v5.1.11/server.php/navigation_find" target="_blank">首页</a></li>

            @foreach($list as $k=>$v)
                <li><a href="http://{{ $v->url }}" target="_blank">{{ $v->title }}</a>

            @endforeach
            <!--
           <li><a href="http://192.168.1.211/sploa/queryCons.php" target="_blank">查询客户资料</a>
               <ul>
                   <li class="top"><a href="http://192.168.1.211/sploa/a1.php" target="_blank">Web</a></li>
                   <li><a href="http://192.168.1.211/sploa/a1.php" target="_blank">Print</a></li>
                   <li><a href="http://192.168.1.211/sploa/a1.php" target="_blank">The Rest</a></li>
               </ul>
           </li>
           <!--
     <li><a href="http://192.168.1.211/sploa/a1.php" target="_blank">Contact</a>
               <ul>
                   <li class="top"><a href="http://192.168.1.211/sploa/a1.php" target="_blank">Web</a></li>
                   <li><a href="http://192.168.1.211/sploa/a1.php" target="_blank">Print1</a></li>
                   <li><a href="http://192.168.1.211/sploa/a1.php" target="_blank">The Rest</a></li>
               </ul>
           </li>
    -->
        </ul>
    </div>
</div>
</html>
