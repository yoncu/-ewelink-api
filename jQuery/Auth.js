curl = new XMLHttpRequest();
curl.onreadystatechange = function(){
	if(this.readyState == 4){
		if (this.status == 200){
			consolo.log(this.response);
			if(this.response[0]){
				alert('İşlem Başarılı.\nDetaylar için console log kontrol ediniz.');
			}else{
				alert('Hata: '+this.response[1]+'\nDetaylar için console log kontrol ediniz.');
			}
		}else{
			alert('API Adresinden Veri Çekilemedi. Status: '+this.status);
		}
	}
}
curl.open("POST", 'https://www.yoncu.com/API/eWeLink/Auth', true);
curl.setRequestHeader("Accept","application/json");
curl.setRequestHeader("Authorization","Basic Base64Encode(##APIID##:##APIKEY##)");
curl.setRequestHeader("Referer","https://www.yoncu.com");
curl.setRequestHeader("User-Agent",window.location.href);
curl.send('{"email":"","password":"","region":"as"}');
