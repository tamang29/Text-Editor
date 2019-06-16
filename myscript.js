function p_tag()
        {
            var foc=4;
            str="<p></p>";
            var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var result=autoFocus(foc);
    

    var input = document.getElementById('editor');
    setCaretPosition(input, result );       
            
        }
function img_tag()
{
    
    str="<img src=''>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
           document.getElementById('editor').focus();
            
            
}
function a_tag()
{
    var foc=4;
    str="<a href=''></a>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var result=autoFocus(foc);
   

    var input = document.getElementById('editor');
    setCaretPosition(input, result );       
            

}
function video_tag()
{
    str="<video src=''>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            document.getElementById('editor').focus();
           

}
function summary_tag()
{
    var foc=10;
    str="<summary></summary>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var result=autoFocus(foc);
            
        
            var input = document.getElementById('editor');
            setCaretPosition(input, result );       

}
function details_tag()
{
    var foc=10;
    str="<details></details>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var text_len=document.getElementById('editor').value.length;
    var result=autoFocus(foc);
    

    var input = document.getElementById('editor');
    setCaretPosition(input, result );       
}
// Credits: http://blog.vishalon.net/index.php/javascript-getting-and-setting-caret-position-in-textarea/
function setCaretPosition(ctrl, result) {
    // Modern browsers
    if (ctrl.setSelectionRange) {
      ctrl.focus();
      ctrl.setSelectionRange(result, result);
    
    // IE8 and below
    // } else if (ctrl.createTextRange) {
    //   var range = ctrl.createTextRange();
    //   range.collapse(true);
    //   range.moveEnd('character', pos);
    //   range.moveStart('character', pos);
    //   range.select();
    // }
  }
}
function bold_tag()
{
    var foc=4;
    str="<b></b>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var result=autoFocus(foc);
    

    var input = document.getElementById('editor');
    setCaretPosition(input, result );       
            
}
function i_tag()
{
    var foc=4;
    str="<i></i>";
    var el= document.getElementById('editor').value;
            el=el+str;
            document.getElementById('editor').value=el;
            var result=autoFocus(foc);
   

    var input = document.getElementById('editor');
    setCaretPosition(input, result );       
            
}



function autoFocus(a)
{
    var text_len=document.getElementById('editor').value.length;
 var result=text_len-a;
 return result;



}