users = {"admin": "admin123","user":"pass123"}
username = input("enter username: ")
password = input("enter password: ")
if username in users and users[username] == password:
    print("login successfully")
    else:
        print("invalid username or password")
