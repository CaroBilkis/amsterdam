

var inputs = document.getElementsByTagName("input");
var cbs = []; //will contain all checkboxes

for (var i = 0; i < inputs.length; i++) {
		if (inputs[i].type == "checkbox") {
			cbs.push(inputs[i]);
		}
}

filterSelection();



function filterSelection() {
	var checkedVal = [],showAll = false;
	for (var i = 0; i < cbs.length; i++) {
		if (cbs[i].checked && cbs[i].value == "all") {
			var showAll = true;
			break;
		} else if (cbs[i].checked) {
			checkedVal.push(cbs[i].value);
		}
	}

	var x, i;
	x = document.getElementsByClassName("filterDiv");

	//if (c == "all") c = "";
	for (i = 0; i < x.length; i++) {
		w3AddClass(x[i], "show");

		if (!showAll) {
			for (var j = 0; j < checkedVal.length; j++) {
				if (x[i].className.indexOf(checkedVal[j]) > -1) {
					w3RemoveClass(x[i], "show");

				}
			}
		}
    else {
    	w3RemoveClass(x[i], "show");

    }

	}
}



function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {
			element.className += " " + arr2[i];
		}
	}
}

function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
			arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
	}
	element.className = arr1.join(" ");
}

function tag(obj) {
	var x, i;
	x = document.getElementsByClassName(obj);
	for (i = 0; i < x.length; i++) {
  	w3AddClass(x[i], "show");
}
}


///////


////



function hide(obj) {

    var el = document.getElementById(obj);


			el.style.display = 'none';


}

function show(obj) {

    var el = document.getElementById(obj);

        el.style.display = 'block';
				el.style.textAlign = 'inherit';

				el.style.marginTop = '0px';
				el.style.marginBottom = '-20px';
}

function chk_control(obj) {
var x = document.getElementById(obj);

if (x.checked !=true){
	 alert("you need to be fluent in English to apply for the job");
}
}
function disable(obj) {
    document.getElementById(obj).disabled = true;
}

function undisable(obj) {
    document.getElementById(obj).disabled = false;
}

function hideFilter(obj){
obj=document.getElementById(obj);


if(document.getElementById('menor').style.display == 'none' && document.getElementById('media').style.display == 'none' && document.getElementById('mayor').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';
		// obj.style.flexDirection='column';
		// obj.style.flexWrap= 'flex-start';
		// obj.style.alignContent='center';
		// obj.style.justifyContent='center';
}
}

function hideFilter2(obj){
obj=document.getElementById(obj);

if(document.getElementById('frutas').style.display == 'none' && document.getElementById('verduras').style.display == 'none' && document.getElementById('chocolate').style.display == 'none' &&
document.getElementById('judias').style.display == 'none' && document.getElementById('horno').style.display == 'none'  && document.getElementById('sinHorno').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}
}

function hideFilterESI(obj){
obj=document.getElementById(obj);

if(document.getElementById('propuestas').style.display == 'none' && document.getElementById('canciones').style.display == 'none' && document.getElementById('teoria').style.display == 'none' &&
document.getElementById('ley').style.display == 'none' && document.getElementById('audiovisuales').style.display == 'none'  && document.getElementById('referentes').style.display == 'none'
&& document.getElementById('noticias').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterCuentos(obj){
obj=document.getElementById(obj);

if(document.getElementById('infantiles').style.display == 'none' && document.getElementById('ilustrados').style.display == 'none' && document.getElementById('identidad').style.display == 'none' &&
document.getElementById('dictadura').style.display == 'none' && document.getElementById('cuerpo').style.display == 'none'  && document.getElementById('emociones').style.display == 'none'
&& document.getElementById('varios').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterArte(obj){
obj=document.getElementById(obj);

if(document.getElementById('tecnicas').style.display == 'none' && document.getElementById('debates').style.display == 'none' && document.getElementById('artistas').style.display == 'none' &&
document.getElementById('varios').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterJuegos(obj){
obj=document.getElementById(obj);
if(document.getElementById('agua').style.display == 'none' && document.getElementById('musica').style.display == 'none' && document.getElementById('cartas').style.display == 'none' &&
document.getElementById('mesa').style.display == 'none' && document.getElementById('memoria').style.display == 'none'  && document.getElementById('soga').style.display == 'none'
&& document.getElementById('varios').style.display == 'none'&& document.getElementById('pelota').style.display == 'none')  {


	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterHistoria(obj){
obj=document.getElementById(obj);
if(document.getElementById('holocausto').style.display == 'none' && document.getElementById('dictadura').style.display == 'none' && document.getElementById('guerra fría').style.display == 'none' &&
document.getElementById('neoliberalismo').style.display == 'none' && document.getElementById('referentes').style.display == 'none'  && document.getElementById('sitios').style.display == 'none'
)  {


	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterJaguim(obj){
obj=document.getElementById(obj);
if(document.getElementById('pesaj').style.display == 'none' && document.getElementById('iom Kipur').style.display == 'none' && document.getElementById('rosh hashana').style.display == 'none' &&
document.getElementById('purim').style.display == 'none' && document.getElementById('sucot').style.display == 'none'
)  {


	obj.style.display='none';
} else {
	obj.style.display='block';

}

}

function hideFilterTecnologia(obj){
obj=document.getElementById(obj);

if(document.getElementById('virtualidad').style.display == 'none' && document.getElementById('debates').style.display == 'none' && document.getElementById('audiovisuales').style.display == 'none' &&
document.getElementById('varios').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}

}
function hideFilterUtil(obj){
obj=document.getElementById(obj);

if(document.getElementById('tecnicas').style.display == 'none' && document.getElementById('materialees').style.display == 'none'  &&
document.getElementById('varios').style.display == 'none')  {

	obj.style.display='none';
} else {
	obj.style.display='block';

}

}
function hover(element, img) {
  element.setAttribute('src', img);
}

function unhover(element,img) {
  element.setAttribute('src',img);
}
