build:
	docker build -t server .
run:
	docker run -d -p 8080:8080 --rm --name server server
stop:
	docker stop server
build-and-run:
	docker build -t server .
	docker run -d -p 8080:8080 --rm --name server server