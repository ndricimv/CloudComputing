window.onload = function(){
    document.getElementById("registerform").style.display='none';
    };
	
/*shfaqe/mshefe formen per login dhe regjistrim */
function registerform(){
var registration = document.getElementById('registerform');
	if ( registration.style.display !== 'none' ) {
		registration.style.display = 'none';
	} else {
		registration.style.display = '';
		document.getElementById("loginform").style.display='none';
	}
 }

function loginform(){
var login = document.getElementById('loginform');
	if ( login.style.display !== 'none' ) {
		login.style.display = 'none';
	} else {
		login.style.display = '';
		document.getElementById("registerform").style.display='none';
	}
 }




/*Validimi i formes per login*/
function validimiforml() {
	let emriRegexl = /^[A-Z][a-z]+$/;
	let passRegexl = /^[A-Z].*\d{3}$/;


	let shfrytezuesi = document.getElementById('shfrytezuesi').value;
	let shfrytezuesigabim = document.getElementById('shfrytezuesigabim');
	let fjalekalimil = document.getElementById('fjalekalimil').value;
	let fjalekalimigabiml = document.getElementById('fjalekalimigabiml');

	shfrytezuesigabim.innerText = '';
	fjalekalimigabiml.innerText = '';

	if (!emriRegexl.test(shfrytezuesi)) {
		shfrytezuesigabim.innerText = "Emri gabim duhet filluar me shkronje te madhe";
		return;
	};
	if (!passRegexl.test(fjalekalimil)) {
		fjalekalimigabiml.innerText = "Fjalekalimi nuk permban karakteret e lejuari psh. P@assw0r123";
		return;
	};
	return true;
}

/*Validimi i formes per regjistrim*/
function validimiform(){
	let emriRegex= /^[A-Z][a-z]+$/;
	let emailRegex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
	let passRegex = /^[A-Z].*\d{3}$/;
	

	let emri = document.getElementById('emri').value;
	let emrigabim = document.getElementById('emrigabim');
	let mbiemri = document.getElementById('mbiemri').value;
	let mbiemrigabim = document.getElementById('mbiemrigabim');
	let email = document.getElementById('email').value;
	let emailgabim = document.getElementById('emailgabim');
	let fjalekalimi = document.getElementById('fjalekalimi').value;
	let fjalekalimigabim = document.getElementById('fjalekalimigabim');
	
	emrigabim.innerText ='';
	mbiemrigabim.innerText ='';
	emailgabim.innerText ='';
	fjalekalimigabim.innerText ='';
	
	if(!emriRegex.test(emri)){
		emrigabim.innerText = "Emri gabim duhet filluar me shkronje te madhe";
		return;
	};
	if(!emriRegex.test(mbiemri)){
		mbiemrigabim.innerText = "Mbiemri gabim duhet filluar me shkronje te madhe";
		return;
	};
	if(!emailRegex.test(email)){
		emailgabim.innerText = "Email adresa gabim nuk ka formatin standard abc@abc.com";
		return;
	};
	if (!passRegex.test(fjalekalimi)){
		fjalekalimigabim.innerText = "Fjalekalimi nuk permban karakteret e lejuari psh. P@assw0r123";
		return;
	};
	return true;
}

/*Validimi i formes per kontakt*/
function validimikontakt() {
	let emriRegex = /^[A-Z][a-z]+$/;
	let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
	let passRegex = /^[A-Z].*\d{3}$/;


	let emri = document.getElementById('emri').value;
	let emrigabim = document.getElementById('emrigabim');
	let mbiemri = document.getElementById('mbiemri').value;
	let mbiemrigabim = document.getElementById('mbiemrigabim');
	let email = document.getElementById('email').value;
	let emailgabim = document.getElementById('emailgabim');

	emrigabim.innerText = '';
	mbiemrigabim.innerText = '';
	emailgabim.innerText = '';

	if (!emriRegex.test(emri)) {
		emrigabim.innerText = "Emri gabim duhet filluar me shkronje te madhe";
		return;
	};
	if (!emriRegex.test(mbiemri)) {
		mbiemrigabim.innerText = "Mbiemri gabim duhet filluar me shkronje te madhe";
		return;
	};
	if (!emailRegex.test(email)) {
		emailgabim.innerText = "Email adresa gabim nuk ka formatin standard abc@abc.com";
		return;
	};

	return true;
}
	

/*Slideri*/
let i=0;
let imgArrey = ["assets/imgs/s1.jpg", "assets/imgs/s2.jpg","assets//imgs/s3.jpg"];

function slideri(){
	document.getElementById('slideri').src=imgArrey[i];
	if(i<imgArrey.length -1){
		i++;
	}else{
		i=0;
	}
	setTimeout(slideri, 5000);
}
document.addEventListener(onload, slideri());

/*Menu responsive*/
function navrespons() {
		var x = document.getElementById("navid");
		if (x.className === "nav") {
			x.className += "responsive";
		} else {
			x.className = "nav";
		}
	}
