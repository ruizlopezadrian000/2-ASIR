notas = {
    "Ana": 8,
    "Luis": 6,
    "Marta": 9,
    "Pedro": 5
}
# 1. Consultar información
print("1. Consultar información")

print("La nota de Ana es", notas["Ana"])

nota_luis = notas["Luis"]
print("La nota de Luis es", nota_luis)

# 2. Consultar una clave inexistente
print("\n2. Consultar una clave inexistente")

nota_elena = notas.get("Elena")

if nota_elena == None:
    print("Alumno no encontrado")
else:
    print("La nota de Elena es", nota_elena)

# 3. Añadir y modificar datos
print("\n3. Añadir y modificar datos")

notas["Elena"] = 7
notas["Pedro"] = 6

print("Diccionario actualizado:", notas)

# 4. Eliminar información
print("\n4. Eliminar información")

del notas["Luis"]

print("Diccionario después de eliminar a Luis:", notas)

# 5. Recorrer claves y valores
print("\n5. Recorrer claves y valores")

print("Nombres de los alumnos:")
for nombre in notas.keys():
    print(nombre)

print("Todas las notas:")
for nota in notas.values():
    print(nota)

print("Alumnos y sus notas:")
for nombre, nota in notas.items():
    print(nombre, ":", nota)

# 6. Ordenar los nombres
print("\n6. Ordenar los nombres")

print("Alumnos ordenados:")
for nombre in sorted(notas.keys()):
    print(nombre, ":", notas[nombre])

# 7. Comprobar si existe un alumno
print("\n7. Comprobar si existe un alumno")

if "Marta" in notas:
    print("Marta está registrada")
else:
    print("Marta no está registrada")

if "Luis" not in notas:
    print("Luis no está registrado")
else:
    print("Luis está registrado")

# 8. Mostrar notas sin repetir
print("\n8. Mostrar notas sin repetir")

notas_diferentes = set(notas.values())

print("Notas diferentes del grupo:")
for nota in sorted(notas_diferentes):
    print(nota)