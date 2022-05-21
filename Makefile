#Makefile
install: #Установка всех зависимостей
	composer install

brain-games:
	php bin/brain-games

validate:
	composer validate