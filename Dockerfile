FROM ubuntu:20.04

RUN apt-get update && apt-get install -y sudo

# RUN useradd -m mahnaz

# # Set the permissions for the user's home directory
# RUN chmod 755 -R /home/mahnaz