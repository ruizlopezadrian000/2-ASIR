excursion = ("Sierra", "sábado")
mochila = ["agua", "bocadillo", "gorra"]
print("Lugar:", excursion[0])
print("Día:", excursion[1])
print("Mochila completa:", mochila)
print("Primer objeto:", mochila[0])
mochila.append("chubasquero")
print("Mochila después de añadir:", mochila)
mochila.remove("gorra")
print("Mochila después de eliminar:", mochila)
print("Número de objetos:", len(mochila))
print("Objetos de la mochila:")
for objeto in mochila:
    print(objeto)