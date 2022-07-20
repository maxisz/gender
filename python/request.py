import requests,json

# location given here
URL = "https://gender.micsofte.co.ke/api"
key = "3afa4be9dd6bc4a1"
name = "max"
# defining a params dict for the parameters to be sent to the API
PARAMS = {'key':key,'name':name}
  
# sending get request and saving the response as response object
r = requests.get(url = URL, params = PARAMS)
  
# extracting data in json format
# data = r.json()

print(r.json())
  