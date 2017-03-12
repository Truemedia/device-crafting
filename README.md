# Device Crafting
## An online robot battling game built in Laravel 5.4, PHP 7, and React


### Prerequisites
Before installing this game, you will need the following software dependencies pre-installed:

- [Virtualbox](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant >= 1.5](https://www.vagrantup.com/downloads.html)
- [Homestead vagrant box >= 2.0](https://laravel.com/docs/5.4/homestead)
- [Laravel >= 5.4 instance](https://laravel.com/docs/5.4/installation) (web.site used as an example instance)

Once these have been setup on your machine, you will be able to install this game via the instructions below

### Installation
Add the following code to the `require` section of your composer.json file inside the root directory of your Laravel project:

    "wadepenistone/devicecrafting": "dev-master"
    
Inside the same also add the following code to the repositories section (create repositories section if it does not exist):

    {
        "type":"vcs",
        "url": "git@github.com:Truemedia/device-crafting.git"
    }
    
After than ssh into your vagrant box and run `composer update` followed by `composer dump-autoload -o` in the root folder of your project.

### Running
(To be updated)

### Testing
(To be updated)

