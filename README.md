# Docker-Multi-Site-Custom

## Tested with...
1. Windows 10 Hyper-V
2. Docker Community edition

## Base on

```bash
$ git clone https://github.com/mbunge/multi-site-docker.git
``` 

 [Engage Multi Site Docker](https://github.com/mbunge/multi-site-docker)

## Environment

Docker for Windows using Hyper-V machine.

### Setup

F_drive folder assume "F:" drive that will be use for container as shared file when docker is setup

```
F:\multiple-sites\machine\
```

Of course we can use other drive, docker will ask permission to share the current drive that container will be using as volume.

### Note

This is using different port, so it wont conlict with my other container project, please change the port to your liking

### Added

docker-entrypoint-initdb.d to initialized creating another database, this will run once, you might need to remove volume if you want to re-run the script.