# Memcached
#
# VERSION       42

# use the ubuntu base image provided by Docker
FROM ubuntu

MAINTAINER Julien Barbier write0@gmail.com

# make sure the package repository is up to date
RUN echo "deb http://archive.ubuntu.com/ubuntu precise main universe" > /etc/apt/sources.list
RUN apt-get update

# install memcached
RUN apt-get install -y memcached

# Launch memcached when launching the container
ENTRYPOINT ["memcached"]

# run memcached as the daemon user
USER daemon

# expose memcached port
EXPOSE 11211
