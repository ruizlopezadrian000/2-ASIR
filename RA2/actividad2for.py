nombre = input("Introduce tu nombre: ")

cantidad = int(input("¿Cuántas asignaturas estás cursando? "))

for numero in range(1, cantidad + 1):
    asignatura = input("Introduce el nombre de la asignatura: ")
    print(numero, "-", asignatura)