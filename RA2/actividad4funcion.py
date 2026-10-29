def recomendar_visita(destino):
    if destino == 1:
        print("Puedes visitar la playa y disfrutar del mar")
    elif destino == 2:
        print("Puedes hacer senderismo y disfrutar de la naturaleza")
    elif destino == 3:
        print("Puedes visitar museos y monumentos")
    else:
        print("Destino no disponible")


nombre = input("Introduce tu nombre: ")

print("¿Dónde quieres viajar?")
print("1. Playa")
print("2. Montaña")
print("3. Ciudad")

destino = int(input("Elige el número del destino: "))

recomendar_visita(destino)

print("¡Hasta pronto, " + nombre + "! Disfruta de tus vacaciones.")