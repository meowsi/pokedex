## Instructions
First, run the container:

```sh
docker-compose up -d
```

This will build the image (if it's not built yet) and run the container. _-d_ simply means it will run in the background and your command line will be free to type in.
After that, you can access the application at **localhost:3000**.

It is possible to enter the container and interact with its OS through the command line.
The following command is used to check which containers are in execution:

```sh
docker ps
```

This will return a list of containers with their respective IDs. Having the ID, use the following command to access the container:

```sh
docker exec -it [container-id] bash
```

And, for leaving the container simply type:

```sh
exit
```

Finally, in order to completely stop the container and delete its content, use the following command:

```sh
docker-compose down
```