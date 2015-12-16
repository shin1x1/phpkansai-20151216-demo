# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "bento/centos-7.1"
  config.vm.network "private_network", ip: "192.168.34.40"

  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777", "fmode=666"]

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "1024"
  end

  config.vm.provision "shell", inline: <<-SHELL
    yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
    yum -y install ansible
    cd /vagrant/provision; ansible-playbook -i localhost vagrant.yml
  SHELL
end
