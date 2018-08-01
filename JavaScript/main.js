function get_name()
{
	var name=prompt("Please enter your name"," ");
	document.getElementById('myname').innerHTML = name;
}
function get_username()
{
var username=prompt("What do you want for your username?"," ");
document.getElementById('myusername').innerHTML = username;
}
function get_avatar()
{
window.open('avatars.html');
}
function pick_avatar()
{
var avatar = prompt("Enter the avatar you want","Bunny");
document.getElementById('myavatar').innerHTML = avatar;
}
function myAvatar(){
  window.open('home.html',"_parent");
}

// Decory Developed Code 
function back(){

	window.open('aboutyou.html',"_parent");
}

