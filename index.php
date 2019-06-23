<?php
 $cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');

 $see="SELECT * from code";
 $selq=mysqli_query($cont,$see) or die(mysqli_error($cont));
 $row=mysqli_fetch_array($selq);
 ?>

<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="text.css">
        <link rel="stylesheet" href="css/all.css" type="text/css">
        <link rel="stylesheet" href="webfonts/" type="text/css">
        <title>Text-Editor</title>
        
        
        
    </head>
    <body>
        <div id="links">
          </div>
        <div class="headerdiv">
            <div id="logoleft">
                <img src="logosmall.png">
            </div>
            <div name="searchtool" id="searchtool">
                    <form action="" method="POST">
                    <input type="text" name="searchbar" id="searchbar" placeholder="Search for item..." style="float:left;">
                    
                </form>
                </div>
        </div>
        <div name="fullbody" class="fullbody">
            <div name="topthree" class="topthree">
                <div name="nav" id="nav">
                        <img src="https://img.icons8.com/ios/50/000000/menu-filled.png" id="menu">
                </div>
                <div name="icons" id="icons">
                    <button onclick="p_tag()" id="p">&lt;p&gt;</button>
                    <button onclick="img_tag()" id="b"><i class="fas fa-image"></i></button>
                    <button onclick="a_tag()" id="c"><i class="fas fa-external-link-alt"></i></button>
                    <button onclick="video_tag()" id="d"><i class="fas fa-video"></i></button>
                    <button onclick="summary_tag()" id="e"><i class="fas fa-level-down-alt"></i></button>
                    <button onclick="details_tag()" id="f"><i class="fas fa-file-medical"></i></button>
                    <button onclick="bold_tag()" id="g"><i class="fas fa-bold"></i></button>
                    <button onclick="i_tag()" id="h"><i class="fas fa-italic"></i></button>
                    <button onclick="p_tag()" id="i">i</button>
                    <button onclick="p_tag()" id="j">j</button>
                    <button onclick="p_tag()" id="k">k</button>
                    <button onclick="p_tag()" id="l">l</button>
                </div>
                
            </div>
            
           
            <div name="workplace" id="textcode">
           
                <form action="select.php?oid=<?php
                if(isset($_GET['oid']))
                {
                echo $_GET['oid'];
                }
                ?>" method="POST">
                <strong style="font-size:25px;font-variant:small-caps;">Header Here</strong><br>
                <input type="text" id="titlebar" name="title" autofocus placeholder="Title Here....." autocomplete="off" value="<?php 
                if(isset($_GET['oid']))
                {
                    $fet=$_GET['oid'];
                    $cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');

                    $see="SELECT * from code where sn='$fet' ";
                    $selq=mysqli_query($cont,$see) or die(mysqli_error($cont));
                    $row=mysqli_fetch_array($selq);
                    echo $row['header'];
                }
                ?>">
                <br>
                <strong style="font-size:25px;font-variant:small-caps;">Add Post</strong>
                <textarea name="edit" id="editor" placeholder="Enter your code...." value="Here"><?php
                if(isset($_GET['oid']))
                {
                    $fet=$_GET['oid'];
                    $cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');

            $see="SELECT * from code where sn='$fet' ";
            $selq=mysqli_query($cont,$see) or die(mysqli_error($cont));
            $row=mysqli_fetch_array($selq);
            echo $row['content'];
                }
                ?></textarea>
                
                <input type="submit" name="create" id="create" value="<?php

                if(isset($_GET['oid']))
                {
                    echo "Update";
                }
                else
                {
                    echo "Create";
                }
                ?>">
                
            
            </form>

            
                       
            </div>
            <div name="list" id="list">
            <fieldset>
            <legend>Recent Posts:</legend>
            <ul>
            <?php
            $cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');

            $see="SELECT * from code order by sn desc limit 5 ";
            $selq=mysqli_query($cont,$see) or die(mysqli_error($cont));
            
            while($row=mysqli_fetch_array($selq))
            {
                ?>
                <li><a href="display.php?cd=<?php echo $row['sn'];?>"><abbr title="View Result"><?php echo $row['header'];?>...</abbr></a><a href="index.php?oid=<?php echo $row['sn']?>" name="edit"><abbr title="Edit"><img src="pencil.png" style="height:20px;" id="hov"></abbr></a></li>
                <?php
            }
            
            ?>
            </ul>
            </fieldset>
            </div>
            <script src="myscript.js"></script>
            <!-- <script>
            function redirection(){


            }
            </script> -->
        </div>
        
        
    </body>

</html>