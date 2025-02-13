# 💥 FREE IP STRESSER PHP UDP SHELL

A simple PHP script to send UDP packets to a specified IP and port for stress testing your own hardware. Use responsibly!

## 🚀 Made by
[🔗 emailnightmare.com](https://emailnightmare.com/)

## ⚠️ Disclaimer
This tool is intended for educational and testing purposes only. Do **NOT** use it for malicious activities. You are responsible for your own actions.

## 📦 Features
✅ Sends UDP packets to a specified IP and port
✅ Allows custom packet size (1-65507 bytes)
✅ User-defined duration for stress testing

## 🛠️ Installation

### 📌 Prerequisites
Ensure you have **PHP CLI** installed. You can install it with:

**For Debian/Ubuntu:**
```sh
sudo apt update && sudo apt install php-cli -y
```

**For CentOS/RHEL:**
```sh
sudo yum install php-cli -y
```

**For Windows:**
- Download PHP from [https://windows.php.net/download](https://windows.php.net/download)
- Extract and add PHP to your system PATH.

## 🎯 Usage
1️⃣ Run the script in a terminal:

```sh
php udp_stress_test.php
```

2️⃣ Enter the required details:
- Server IP
- Server Port
- Duration (in seconds)
- Packet Size (1-65507 bytes)

3️⃣ The script will send UDP packets for the specified duration.

## 📌 Example Output
```
Enter Server IP: 192.168.1.1
Enter Server Port: 80
Enter Duration (seconds): 10
Enter Packet Size (1-65507): 1024
UDP stress test completed.
```

## 📜 License
This script is provided as-is with no warranty. Use at your own risk. 🛠️

