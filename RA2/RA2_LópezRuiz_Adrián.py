def comprobar_acceso(edad):
    if edad >= 18:
        return "Acceso permitido"
    else:
        return "Acceso denegado"

edad_usuario = int(input("Introduce tu edad: "))
resultado = comprobar_acceso(edad_usuario)
print(resultado)