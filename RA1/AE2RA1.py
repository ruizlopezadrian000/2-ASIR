nombre = input("Introduce tu nombre y apellidos: ")
edad = int(input("Introduce tu edad: "))
numero_modulos = int(input("Introduce el número de módulos matriculados: "))
precio_modulo = float(input("Introduce el precio de matrícula por módulo: "))
nota_media = float(input("Introduce la nota media del curso anterior: "))
distancia = float(input("Introduce la distancia desde tu domicilio al centro (km): "))

importe_inicial = numero_modulos * precio_modulo

if numero_modulos >= 6:
    descuento = importe_inicial * 0.10
else:
    descuento = 0

importe_final = importe_inicial - descuento

cumple_ayuda = nota_media >= 7 and distancia >= 20

print()
print("Resumen de la matrícula")
print()
print("Alumno:", nombre)
print("Edad:", edad, "años")
print("Módulos matriculados:", numero_modulos)
print("Precio por módulo:", precio_modulo, "€")
print()
print("Importe inicial:", importe_inicial, "€")
print("Descuento:", descuento, "€")
print("Importe final:", importe_final, "€")
print()
print("Nota media:", nota_media)
print("Distancia al centro:", distancia, "km")
print("Cumple los requisitos para solicitar la ayuda:", cumple_ayuda)