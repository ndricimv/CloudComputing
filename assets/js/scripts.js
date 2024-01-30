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
	let emailRegexl = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
	let passRegexl = /^[A-Z].*\d{3}$/;


	let shfrytezuesi = document.getElementById('shfrytezuesi').value;
	let shfrytezuesigabim = document.getElementById('shfrytezuesigabim');
	let fjalekalimil = document.getElementById('fjalekalimil').value;
	let fjalekalimigabiml = document.getElementById('fjalekalimigabiml');

	shfrytezuesigabim.innerText = '';
	fjalekalimigabiml.innerText = '';

	if (!emailRegexl.test(shfrytezuesi)) {
		shfrytezuesigabim.innerText = "Email adresa gabim nuk ka formatin standard abc@abc.com";
		return false;
	};
	if (!passRegexl.test(fjalekalimil)) {
		fjalekalimigabiml.innerText = "Fjalekalimi nuk permban karakteret e lejuari psh. P@assw0r123";
		return false;
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
		return false;
	};
	if(!emriRegex.test(mbiemri)){
		mbiemrigabim.innerText = "Mbiemri gabim duhet filluar me shkronje te madhe";
		return false;
	};
	if(!emailRegex.test(email)){
		emailgabim.innerText = "Email adresa gabim nuk ka formatin standard abc@abc.com";
		return false;
	};
	if (!passRegex.test(fjalekalimi)){
		fjalekalimigabim.innerText = "Fjalekalimi nuk permban karakteret e lejuari psh. P@assw0r123";
		return false;
	}
	return true;
}

/*Validimi i formes per kontakt*/
function validimikontakt() {

    let emriRegex = /^[A-Z][a-z]+$/;
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;

    let emri = document.getElementById('emri').value;
    let emrigabim = document.getElementById('emrigabim');
    let mbiemri = document.getElementById('mbiemri').value;
    let mbiemrigabim = document.getElementById('mbiemrigabim');
    let email = document.getElementById('email').value;
    let emailgabim = document.getElementById('emailgabim');
	let mesazhi = document.getElementById('mesazhi').value;

    emrigabim.innerText = '';
    mbiemrigabim.innerText = '';
    emailgabim.innerText = '';
	mesazhigabim.innerText = '';

    if (!emriRegex.test(emri)) {
        emrigabim.innerText = "Emri gabim, duhet filluar me shkronjë të madhe.";
        return false;
    }

    if (!emriRegex.test(mbiemri)) {
        mbiemrigabim.innerText = "Mbiemri gabim, duhet filluar me shkronjë të madhe.";
        return false;
	}

    if (!emailRegex.test(email)) {
         emailgabim.innerText = "Email adresa gabim, nuk ka formatin standard abc@abc.com.";
         return false;
    }

    if (mesazhi.length < 5) {
         mesazhigabim.innerText = "Mesazhi duhet te jete me i gjat se 5 karaktere";
         return false;
    }

    return true;
}


/*Validimi i formes per server*/
function shtoserverv() {

    let titulliRegex = /^[A-Za-z0-9\s]+$/;
	let cmimiRegex = /^\d+(\.\d{1,2})?$/;
	let fotoRegex = /^.*\.(jpg|jpeg|png)$/;

    let titulli = document.getElementById('titulli').value;
    let titulligabim = document.getElementById('titulligabim');
    let cmimi = document.getElementById('cmimi').value;
    let cmimigabim = document.getElementById('cmimigabim');
	let foto = document.getElementById('foto').value;
    let fotogabim = document.getElementById('fotogabim');

    titulligabim.innerText = '';
    cmimigabim.innerText = '';
	fotogabim.innerText = '';

    if (!titulliRegex.test(titulli)) {
        titulligabim.innerText = "Titulli nuk permban formatin e lejuar Text, hapesir, numer.";
        return false;
    }

    if (!cmimiRegex.test(cmimi)) {
		cmimigabim.innerText = "Cmimi nuk perban formatin e lejuat vetem numer.";
         return false;
    }

	if (!fotoRegex.test(foto)) {
		fotogabim.innerText = "Formati i fotos nuk eshe i lejuar perdor png, jpeg, jpg.";
         return false;
    }

    return true;
}

/*Validimi i formes per server*/
function shtoserverv() {

    let titulliRegex = /^[A-Za-z0-9\s]+$/;
	let cmimiRegex = /^\d+(\.\d{1,2})?$/;

    let titulli = document.getElementById('titulli').value;
    let titulligabim = document.getElementById('titulligabim');
    let cmimi = document.getElementById('cmimi').value;
    let cmimigabim = document.getElementById('cmimigabim');

    titulligabim.innerText = '';
    cmimigabim.innerText = '';

    if (!titulliRegex.test(titulli)) {
        titulligabim.innerText = "Titulli nuk permban formatin e lejuar Text, hapesir, numer.";
        return false;
    }

    if (!cmimiRegex.test(cmimi)) {
		cmimigabim.innerText = "Cmimi nuk perban formatin e lejuat vetem numer.";
         return false;
    }
    return true;
}


/*Validimi i formes per lajme*/
function shtolajmv() {

    let titulliRegex = /^[a-zA-Z0-9\s\W]+$/;
	let fotoRegex = /^.*\.(jpg|jpeg|png)$/;

    let titulli = document.getElementById('titulli').value;
    let titulligabim = document.getElementById('titulligabim');
	let pershkrimi = document.getElementById('pershkrimi').value;
    let pershkrimigabim = document.getElementById('pershkrimigabim');
	let foto = document.getElementById('foto').value;
    let fotogabim = document.getElementById('fotogabim');

    titulligabim.innerText = '';
	pershkrimigabim.innerText = '';
	fotogabim.innerText = '';

    if (!titulliRegex.test(titulli)) {
        titulligabim.innerText = "Titulli nuk permban formatin e lejuar Text, hapesir, numer.";
        return false;
    }

    if (!titulliRegex.test(pershkrimi) || (pershkrimi.length < 5)) {
        pershkrimigabim.innerText = "Pershkrimi nuk permban formatin e lejuar Text, hapesir, numer dhe me shume se 5 karaktere.";
        return false;
	}

	if (!fotoRegex.test(foto)) {
		fotogabim.innerText = "Formati i fotos nuk eshe i lejuar perdor png, jpeg, jpg.";
         return false;
    }

    return true;
}

/*Validimi i formes per lajme update*/
function shtolajmvu() {

    let titulliRegex = /^[a-zA-Z0-9\s\W]+$/;

    let titulli = document.getElementById('titulli').value;
    let titulligabim = document.getElementById('titulligabim');
	let pershkrimi = document.getElementById('pershkrimi').value;
    let pershkrimigabim = document.getElementById('pershkrimigabim');

    titulligabim.innerText = '';
	pershkrimigabim.innerText = '';

    if (!titulliRegex.test(titulli)) {
        titulligabim.innerText = "Titulli nuk permban formatin e lejuar Text, hapesir, numer.";
        return false;
    }

    if (!titulliRegex.test(pershkrimi) || (pershkrimi.length < 5)) {
        pershkrimigabim.innerText = "Pershkrimi nuk permban formatin e lejuar Text, hapesir, numer dhe me shume se 5 karaktere.";
        return false;
	}

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


function just2cat()
{
	var allInp = document.getElementsByTagName('input');
	const MAX_CHECK_ = 3;
	var nbChk =0;
	for(var i= 0; i<allInp.length; i++)
	{
		if(allInp[i].type.toLowerCase()=='checkbox' && allInp[i].checked) 
		{
			nbChk++;

			if(nbChk > MAX_CHECK_) 
			{
				alert("Maksimumi i zgjedhjeve eshte 3");
				allInp[i].checked=false;
			}

		}
	}
}