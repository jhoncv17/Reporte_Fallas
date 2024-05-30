import socket
import random

# Crear un socket UDP
sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)

# Especificar la dirección IP y el puerto de destino
destino = ("192.168.50.5", 80)

# Enviar 10000 paquetes
for i in range(10000):
    # Generar un mensaje aleatorio
    mensaje = str(random.randint(0, 1000))

    # Enviar el mensaje al destino
    sock.sendto(mensaje.encode(), destino)

# Cerrar el socket
sock.close()
