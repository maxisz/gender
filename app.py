# base_url = "http://localhost/gender-api/"
app_url = ''
user_name = ""
user_password =""
logo = '''
   ________                   .___                _____         .__     _____       .___      .__               
 /  _____/  ____   ____    __| _/___________    /  _  \ ______ |__|   /  _  \    __| _/_____ |__| ____   ______
/   \  ____/ __ \ /    \  / __ |/ __ \_  __ \  /  /_\  \\____ \|  |  /  /_\  \  / __ |/     \|  |/    \ /  ___/
\    \_\  \  ___/|   |  \/ /_/ \  ___/|  | \/ /    |    \  |_> >  | /    |    \/ /_/ |  Y Y  \  |   |  \\___ \ 
 \______  /\___  >___|  /\____ |\___  >__|    \____|__  /   __/|__| \____|__  /\____ |__|_|  /__|___|  /____  >
        \/     \/     \/      \/    \/                \/|__|                \/      \/     \/        \/     \/  
    Welcome Admin Kindly Login to be authenticated to use the system:

'''

def start():
    global app_url
    app_url = input("Enter app url: ")
    print(logo)
    auth()
 
def auth():
    global user_name
    global user_password
    user_name = input("Admin Username: ")
    user_password = input("Admin Password: ")




start()