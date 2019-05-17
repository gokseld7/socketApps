import socket
import os
import sys

socket_file = "unix_socket"

listener_socket = socket.socket(socket.AF_UNIX, socket.SOCK_STREAM)
listener_socket.connect(socket_file)

try:
	msg = sys.argv[1]
except:
	msg = "This is a test message."

listener_socket.send(msg)
	
	