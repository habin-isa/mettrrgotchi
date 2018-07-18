Mettrrgotchi
=====
##### Object oriented Tamagotchi in PHP

###### 1. Requirements:
1. PHP 7.2 +
2. Composer

Both can be obtained using Homebrew - follow instructions below:

1. Setup Brew: `ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`
2. Update: `brew update`
3. Install PHP 7.2.+ `brew install php`
4. Finally, install composer: `brew install composer`

If everything is set correctly running `php -v` should return `7.2+` and `composer -v` should return `1.6+`.

If you're not getting php 7.2 + then you might need to fix your Brew. Best way to do this is to run `brew doctor` and following the instructions there, especially the one with `export PATH` if such issue is identified.

###### 2. Set up:
1. Pull the repo
2. Run `composer install`

And you're ready to go!
