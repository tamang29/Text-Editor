function p_tag()
        {
            var el= document.getElementById('editor').value;
            el=el+"<p></p>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();
        }
function img_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<img src=''>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();
}
function a_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<a href=''></a>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();

}
function video_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<video src=''>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();

}
function summary_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<summary></summary>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();

}
function details_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<details></details>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();
}
function bold_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<b></b>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();
}
function i_tag()
{
    var el= document.getElementById('editor').value;
            el=el+"<i></i>";
            document.getElementById('editor').value=el;
            document.getElementById("editor").focus();
}
