// JavaScript Document

function ajaxFunction()
{
var xmlHttp;
try
{

xmlHttp=new XMLHttpRequest();
}
catch (e)
{

try
{
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
alert("Your browser does not support AJAX!");
return false;
}
}
}

return xmlHttp;
}

