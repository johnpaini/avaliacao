# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "forwarded_port", guest: 80, host: 8756
  	config.vm.network "forwarded_port", guest: 5432, host: 5555
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "prova"
    #config.vm.synced_folder ".", "/var/www",  :mount_options => ["dmode=777", "fmode=666"]
    config.ssh.username = "vagrant"
    config.ssh.password = "vagrant"
    
    # Optional NFS. Make sure to remove other synced_folder line too
    config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end
