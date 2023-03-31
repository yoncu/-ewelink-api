import requests;
import json;

headers = {
	"Accept": "application/json",
	"Authorization": "Basic Base64Encode(##APIID##:##APIKEY##)",
	"Referer": "https://www.yoncu.com",
	"User-Agent": "Python-YoncuAPI"
};
curl = requests.post('https://www.yoncu.com/API/eWeLink/Auth', data=json.dumps({"email":"","password":"","region":"as"}), headers=headers);
