projectPath = ENV["PWD"]
localPath = File.dirname(__FILE__)

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/xenial64"
  config.vm.network "private_network", type: "dhcp"
  config.vm.synced_folder projectPath, "/vagrant"

  # Get rid of ubuntu-xenial-16.04-cloudimg-console.log
  config.vm.provider "virtualbox" do |vb|
    vb.customize ["modifyvm", :id, "--uartmode1", "disconnected"]
  end

  config.vm.provision :shell,
    path: File.join(localPath, 'scripts/vagrant/provision.sh')

  config.vm.provision :shell, 
    path: File.join(localPath, 'scripts/vagrant/up.sh'), 
    run: "always"

end
