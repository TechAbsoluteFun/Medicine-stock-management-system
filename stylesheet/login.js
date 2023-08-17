Event.observe(window,"load",function(){
if($("loginForm")){
$("email").focus();
}
});
function reloadCaptcha(_1,_2){
var _3=_1;
_3+="captcha.php?session=";
_3+=_2;
_3+=noCacheParam();
$("captcha_image").src=_3;
return false;
};
function toggleAccessSetup(){
$$(".accessSetup").each(function(el){
if($("adminAccess").checked){
el.hide();
}else{
el.show();
}
});
};
function changePassword(){
var _5;
if(_5=$("changePassword")){
_5.style.display="";
if(link=$("changePasswordLink")){
link.style.display="none";
}
}
};

