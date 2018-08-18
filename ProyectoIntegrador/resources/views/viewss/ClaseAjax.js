

var prueba= new XMLHttpRequest();
prueba.onreadystatechange=function(){
if(prueba.readyState==4 && prueba.status==200){
	console.log(JSON.parse(prueba.responseText));
}
};

prueba.open("GET", "https://dev.digitalhouse.com/api/getCursos",true);

prueba.send()

