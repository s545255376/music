/**
 * 
 */


function  sltAll(){
	var  nn=document.all['news'];
	for(var i=0;1<nn.length;i++){
		nn[i].checked=true;
	}
	
}
function  unselAll(){
	var  nn=document.all['news'];
	for(var i=0;1<nn.length;i++){
		nn[i].checked=false;
	}	
}
function del(){
	var r=confirm("确定要删除吗？");
	if(r){
	var action=document.getElementById('addF').action="http://localhost/down/admin.php/News/delete";
	document.getElementById('addF').submit();
	}
}