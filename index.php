
<html>
    <head>
        <link rel="stylesheet" href="text.css">
        <title>Text-Editor</title>
        
        
        </script>
    </head>
    <body>
        <div name="fullbody" class="fullbody">
            <div name="topthree" class="topthree">
                <div name="nav" id="nav">
                        <img src="https://img.icons8.com/ios/50/000000/menu-filled.png" id="menu">
                </div>
                <div name="icons" id="icons">
                    <button onclick="p_tag()" id="p">a</button>
                    <button onclick="img_tag()" id="b">b</button>
                    <button onclick="a_tag()" id="c">c</button>
                    <button onclick="video_tag()" id="d">d</button>
                    <button onclick="summary_tag()" id="e">e</button>
                    <button onclick="details_tag()" id="f">f</button>
                    <button onclick="bold_tag()" id="g">g</button>
                    <button onclick="i_tag()" id="h">h</button>
                    <button onclick="p_tag()" id="i">i</button>
                    <button onclick="p_tag()" id="j">j</button>
                    <button onclick="p_tag()" id="k">k</button>
                    <button onclick="p_tag()" id="l">l</button>
                </div>
                <div name="searchtool" id="searchtool">
                    <form action="" method="POST">
                    <input type="text" name="searchbar" id="searchbar">
                    
                </form>
                </div>
            </div>
            <div name="workplace" id="textcode">
                <form action="" method="POST">
                <textarea name="editor" id="editor" autofocus></textarea>
                <button type="submit" name="create" id="create">Create</button>
            </form>
            </div>
            <script src="myscript.js"></script>
        </div>
        
    </body>

</html>