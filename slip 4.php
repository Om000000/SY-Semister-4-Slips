<!DOCTYPE html>
<html>
<head>
<script>
function showdetails(str)
{
    if(str.length==0)
    {
        document.getElementById("details").innerHTML="";
        return;
    }

    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }
    };

    xhr.open("GET","detail.php?q="+encodeURIComponent(str),true);
    xhr.send();
}
</script>
</head>

<body>
<label>Enter name of the student</label>
<input type="text" onkeyup="showdetails(this.value)">
<span id="details"></span>
</body>
</html>