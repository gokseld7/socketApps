#Before running, type "touch unix_socket" from your command line
#in the same folder with that program.

import socket
import os

socket_file = "unix_socket"
os.unlink(socket_file)

listener_socket = socket.socket(socket.AF_UNIX, socket.SOCK_STREAM)
listener_socket.bind(socket_file)
listener_socket.listen(1)

while True:
	conn, address = listener_socket.accept()
	msg = conn.recv(1024)
	if("close_socket" in msg):
		print("Exit.")
		break
	print(msg)

listener_socket.close()
