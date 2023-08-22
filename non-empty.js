function required()
{
var empt = document.forms["f1"]["username"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
}
