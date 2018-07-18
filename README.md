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

#### Tasks:

##### Week 1:

Create your own creature! Make sure the creature is original. There are few requirements:

- creature needs to respond to messages getAge() and setName(), getName() and getHunger()
- creature needs to be able to handle eat(string $food) and poop() messages (in it's unique way). These functions must change hunger property of the creature and return a string.
- creature needs a constant PICTURE
- class name must be unique
- creature needs at least 1 very unique skill returning a string

I have created a Slug class as an example. You may use it as a reference, but the more crazy and original creature you create the better. Go crazy 🤪 !

Remember to TDD your code and have fun!
