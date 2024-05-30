import mysql.connector
from mysql.connector import Error
from telegram import Bot
import time

# Configuración de la conexión a la base de datos
def conectar_base_de_datos():
    try:
        db_connection = mysql.connector.connect(
            host="localhost",
            user="root",
            password="",
            database="ReportesFallasDB"
        )
        print("Conexión a la base de datos establecida.")
        return db_connection
    except Error as e:
        print(f"Error al conectar a la base de datos: {e}")
        exit()

# Define tu token de acceso aquí
TOKEN = '7137268645:AAEw0Bbtrm4QlutBW6HS9buyfK8tJD_O0vg'
chat_id = 5133986403  # ID del chat al que deseas enviar el mensaje

def enviar_mensaje_telegram(mensaje):
    try:
        bot = Bot(token=TOKEN)
        bot.send_message(chat_id=chat_id, text=mensaje)
        print(f"Mensaje enviado: {mensaje}")
    except Exception as e:
        print(f"Error al enviar mensaje a Telegram: {e}")

def verificar_nuevos_reportes(db_connection):
    cursor = db_connection.cursor()
    try:
        cursor.execute("SELECT * FROM RegistroFallas WHERE enviado = 0")  # Selecciona reportes no enviados
        reportes = cursor.fetchall()
        print(f"Reportes no enviados encontrados: {len(reportes)}")
        
        for reporte in reportes:
            # Generar resumen del reporte de falla
            resumen = f"Nuevo reporte de falla:\nID: {reporte[0]}\nÁrea: {reporte[1]}\nProblema: {reporte[2]}"
            print(f"Enviando resumen: {resumen}")
            
            # Enviar resumen a través de Telegram
            enviar_mensaje_telegram(resumen)
            
            # Marcar el reporte como enviado en la base de datos
            cursor.execute("UPDATE RegistroFallas SET enviado = 1 WHERE report_id = %s", (reporte[0],))
            db_connection.commit()
            print(f"Reporte marcado como enviado: ID {reporte[0]}")
    except Error as e:
        print(f"Error al ejecutar la consulta SQL: {e}")
    finally:
        cursor.close()

# Bucle infinito para ejecutar la lógica del bot continuamente
while True:
    # Conexión a la base de datos
    db_connection = conectar_base_de_datos()

    # Verificar y enviar reportes no enviados
    verificar_nuevos_reportes(db_connection)

    # Cerrar la conexión a la base de datos
    db_connection.close()
    print("Conexión a la base de datos cerrada.")

    # Esperar 5 segundos antes de volver a ejecutar la lógica del bot
    time.sleep(5)  # Espera 5 segundos antes de volver a ejecutar la lógica del bot