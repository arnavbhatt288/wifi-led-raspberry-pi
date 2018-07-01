# WiFi LED Raspberry Pi
Small project I made when I was bored.

# Things you need - 
1. Raspberry Pi 3  (or any Raspberry Pi with wifi adapter or connected to router)
2. Raspbian Lite 
3. Apache web server

# Setup
1. Check your ip address of your Raspberry Pi
2. Run command "sudo apt-get install apache2 && sudo apt-get install php libapache2-mod-php -y"
3. Remove index.html and copy the index.php and images folder in /var/www/html (you can put any image on images folder as your wish for your project)
4. Copy .py files to /home/pi
5. Use GPIO pin number 18 and 23 for connecting LEDS but you can also customize it for your wish

You can use it freely and you can also hack the code for doing something else! :)
 
