import serial
import time
import requests
import json
arduino = serial.Serial('COM1', 9600)

def ledControl(cmd):
    arduino.write(cmd.encode())
    
while True:
    lets = arduino.readline()
    data = lets[0:len(lets)-2].decode("utf-8")
    konfigurasi = {'id_ikan':'2','tinggi_air': data, 'nama_ikan': 'Ikan Lele'}
    uji_localhost = requests.get("http://localhost/uas_dionaji/", params=konfigurasi)
    print(uji_localhost.text)
  

   