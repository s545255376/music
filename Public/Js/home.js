/**
 * 
 */


  function  onmouse(x){
	  x.style.cssText="color:white";
  }
  function  outmouse(x){
	  x.style.cssText="color:#D5D5D5";
  }

  function  getkey(){
	  var x=document.getElementById('stext');
	  var y=document.getElementById('shref')+x.value;
	  document.getElementById('shref').href=y;
  }
  
  function  noindex(x){
	  document.getElementById('cate').href="#";
	  document.getElementById('all').href="/down/index.php/Home/Download/indexall";
	  x.style.cssText="color:red";
  }
  function  noall(x){
	  document.getElementById('all').href="#";
	  document.getElementById('cate').href="/down/index.php/Home/Download/index";
	  x.style.cssText="color:red";
  }
