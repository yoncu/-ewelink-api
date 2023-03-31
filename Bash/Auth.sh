curl 'https://www.yoncu.com/API/eWeLink/Auth' \
  -H 'Accept: application/json' \
  -H 'Authorization: Basic Base64Encode(##APIID##:##APIKEY##)' \
  -H 'User-Agent: Bash-YoncuAPI' \
  -H 'Referer: https://www.yoncu.com' \
  -d '{"email":"","password":"","region":"as"}' \
  -X POST
