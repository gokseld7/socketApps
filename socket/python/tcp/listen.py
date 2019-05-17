import socket

ip 	 = "127.0.0.1"
port = 12345

listener_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
listener_socket.setsockopt(socket.SOL_SOCKET, socket.SO_KEEPALIVE, 1)
listener_socket.bind((ip, port))
listener_socket.listen(1)
print("Socket listening...")

while True:
	conn,addr = listener_socket.accept()
	msg = conn.recv(1024)
	if ('close_socket' in msg):
		print("Exit.")
		break
	print(msg)

listener_socket.close()