import socket

ip 	 = "127.0.0.1"
port = 12345

listener_socket = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
listener_socket.bind((ip, port))

while True:
	msg = listener_socket.recv(1024)
	if ("close_socket" in msg):
		print("Exit.")
		break
	print(msg)

listener_socket.close()
