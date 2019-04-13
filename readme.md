# Local Development Environment

Add this to any project with `docker-compose.yaml` to run the containers inside Vagrant. Useful for creating friendly development environments with beautiful hostnames (no port numbers) that don't require Docker on the host machine.


## Requirements

- [Vagrant](https://www.vagrantup.com/)
- [VirtualBox](https://www.virtualbox.org/)


## Install

1. Add this package to your project using [Composer](https://getcomposer.org):

		composer require --dev wpsh/local

2. Add `Vagrantfile` to the root of your project with the following contents:

		load File.join(
		  File.dirname(__FILE__),
		  'vendor/wpsh/local/Vagrantfile'
		)

	where `vendor/wpsh/local` is the relative path to this packge.

3. Create `docker-compose.yaml` in the root of your project to define the virtual environment.


## To Do

- Add support for installing via `npm`.
- Automatically create the project `Vagrantfile` on the first install.


## Credits

Created by [Kaspars Dambis](https://kaspars.net).


## License

See the LICENSE file for license rights and limitations (MIT).
