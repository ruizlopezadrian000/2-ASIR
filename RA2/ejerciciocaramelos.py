nombre = input("Nombre: ")
edad = int(input("Edad: "))
if edad < 6:
    print("Recibe 10 caramelos")
elif edad >= 6 and edad <= 12:
    print("Recibe 7 caramelos")
elif edad >= 13 and edad <= 17:
    print("Recibe 4 caramelos")
else:
    print("Recibe 1 caramelo")