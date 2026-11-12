notas = {
    "Ana": 8,
    "Luis": 6,
    "Marta": 9,
    "Pedro": 5
}
print("La nota de Ana es", notas["Ana"])

nota_luis = notas["Luis"]
print("La nota de Luis es", nota_luis)

print(notas.get("Elena", "Alumno no encontrado"))

notas["Elena"] = 7
notas["Pedro"] = 6

print(notas)

del notas["Luis"]
print(notas)

for nombre in notas.keys():
    print(nombre)

for nota in notas.values():
    print(nota)

for nombre, nota in notas.items():
    print(nombre, ":", nota)

print("Alumnos ordenados:")

for nombre in ["Ana", "Elena", "Marta", "Pedro"]:
    print(nombre + ":", notas[nombre])

if "Marta" in notas:
    print("Marta está registrada")

if "Luis" not in notas:
    print("Luis no está registrado")

print("Notas diferentes:")

for nota in set(notas.values()):
    print(nota)