# otus-demo-queues
This project for Demo Lesson. Topic Laravel queues

Guide
1. git clone git@github.com:egerasimchuk/otus-demo-queues.git
2. composer install
3. php artisan migrate
4. php artisan queue:work --tries 5 --delay 5

Laravel Installation via Vagrant Hometead

From: https://laravel.com/docs/5.8/homestead#installation-and-setup

1. Download Virtual box

https://www.virtualbox.org/wiki/Downloads
2. Download Vagrant

https://www.vagrantup.com/downloads.html
3. Install Laravel homestead

*vagrant box add laravel/homestead

At the beginning of the installation select provider number 3: virtual box
Wait 2-5 min for installation

4. Clone base configs and checkout to stable version

*git clone https://github.com/laravel/homestead.git 

*cd ~/Homestead

*git checkout release

5. Create Homestead.yaml

Linux:

*bash init.sh

Windows:

*init.bat

6. Configure Homestead.yaml 
Set  your project folder 

*folders:
*- map: ~/Work/otus/queues

*to: /home/vagrant/code/queues

7. Add config to /etc/hosts  
*192.168.10.10 homestead.test
8. Starting vagrant 
*vagrant up
