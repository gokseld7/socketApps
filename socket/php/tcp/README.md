# PHP Socket Applications
<p>
Step-by step examples in PHP; for creating a socket to a server and writing, uploading, sending datas to it
<p>
Sockets are crucial in software applications about internet and telecommunications. In this PHP project, you will learn to create sockets and use them efficiently from scratch.You don't have to know anything about socket programming !

<h1> What Is A Socket ? </h1>
<p>
Sockets allow communication between two different processes on the same or different machines. To be more precise, it's a way to talk to other computers using standard Unix file descriptors. In Unix, every I/O action is done by writing or reading a file descriptor. A file descriptor is just an integer associated with an open file and it can be a network connection, a text file, a terminal, or something else.
<p>
To a programmer, a socket looks and behaves much like a low-level file descriptor. This is because commands such as read() and write() work with sockets in the same way they do with files and pipes.
<p>
To have more information, you can visit <a href = https://www.tutorialspoint.com/unix_sockets/what_is_socket.htm> this website </a>.

<h1> Examples </h1>
<ol>
<li>     <b>Hello World</b>: Creating a Socket and Writing a Simple Message     </li>
<li>     <b>Array Socket</b>: Writing a Simple Array to a Socket     </li>
<li>     <b>File and Socket</b>: Writing an Array to Both a File and a Socket     </li>
<li>     <b>Array Socket with fsockopen</b>: Use Sockets as a File and Write an Array to it     </li>
<li>     <b>Read and Write to Socket</b>: Read a Simple Binary Data and Write it to the Socket     </li>
<li>     <b>Video Upload</b>: Read Binary Data from Video and Write it to the Socket     </li>
</ol>
<hr>
<p> <b> Please note that </b>these socket tutorials were made for TCP protocols.
