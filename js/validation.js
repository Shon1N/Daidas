function validation(){
        var name = document.getElementById("name").value ;
        var name_len = name.trim().length;
if (name_len < 1)
{
document.getElementById("valid_name").style.display = "block";
returnToPreviousPage();
return false;
}
else {
  return true;
}
}

function returnToPreviousPage() {
    window.history.back();
}
