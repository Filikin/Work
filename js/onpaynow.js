$(function() 
{
  $('input#pay').show();
});

$("input#pay").click(function() 
{
  alert ("Off to Paypal");
  return false;
});