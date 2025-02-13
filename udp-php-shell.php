<?php
// UDP Stress Test php shell Script made by emailnightmare.com

// Get user inputs
echo "Enter Server IP: ";
$server_ip = trim(fgets(STDIN));

echo "Enter Server Port: ";
$server_port = (int) trim(fgets(STDIN));

echo "Enter Duration (seconds): ";
$duration = (int) trim(fgets(STDIN));

echo "Enter Packet Size (1-65507): ";
$packet_size = (int) trim(fgets(STDIN));

// Validate packet size
if ($packet_size < 1 || $packet_size > 65507) {
    die("Invalid packet size. Must be between 1 and 65507 bytes.\n");
}

// Create UDP socket
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
if (!$socket) {
    die("Failed to create socket.\n");
}

// Generate packet data
$packet = str_repeat("X", $packet_size);

// Send packets for the specified duration
$end_time = time() + $duration;
while (time() < $end_time) {
    socket_sendto($socket, $packet, $packet_size, 0, $server_ip, $server_port);
}

// Close the socket
socket_close($socket);

echo "UDP stress test completed.\n";
?>
