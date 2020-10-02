# Want to contribute for debug API DATA JSON similar Var_dump with PHP function
# here for PY DEV
# change alexonbstudio.yo.fr by your own domain name

import urllib.request, json 
with urllib.request.urlopen("https://alexonbstudio.yo.fr/api/private.json") as url:
data = json.loads(url.read().decode())
print(data)