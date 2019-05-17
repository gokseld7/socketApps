import socket
import sys

ip 	 = "127.0.0.1"
port = 12345

listener_socket = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
listener_socket.connect((ip, port))

try:
	msg = sys.argv[1]
except:
	msg= "This is a test message."

listener_socket.send(msg)