# Local Development Environment

Use this package to quickly add a development environment to your project.


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
- Add examples of `docker-compose.yaml` for various projects.


## Credits

Created by [Kaspars Dambis](https://kaspars.net).


## License

See the LICENSE file for license rights and limitations (MIT).