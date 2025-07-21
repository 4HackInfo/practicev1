username = input("Enter your username: ")
password = input("Enter your password: ")

while True:
    print("\nMenu:")
    choice = int(input("[1] Account Information\n[2] Change username\n[3] Change password\n[4] Exit\n>> "))

    if choice == 1:
        print("\nAccount Security, Log in your account first!")
        loginUsername = input("Username: ")
        loginPassword = input("Password: ")

        if loginUsername == username and loginPassword == password:
            print("\nYour account details:")
            print("Username:", username)
            print("Password:", password)  # In real apps, never show passwords!
        else:
            print("Invalid username or password!")

    elif choice == 2:
        newUsername = input("Enter new username: ")
        username = newUsername
        print("Username updated successfully!")

    elif choice == 3:
        newPassword = input("Enter new password: ")  # Fixed typo ("username" → "password")
        password = newPassword
        print("Password updated successfully!")

    elif choice == 4:
        print("Exiting...")
        break  # Exit the loop

    else:
        print("Invalid choice! Please select 1-4.")