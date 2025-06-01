#!/bin/bash
# Get the current status and pause to think
git status

while true; do
    read -p "Do you want to proceed? (y/n) " yn
    case $yn in
        [Yy]* ) echo "ok, we will proceed"; break;;
        [Nn]* ) echo "exiting..."; exit;;
        * ) echo "invalid response";;
    esac
done

echo "doing stuff..."



# Prompt the user for a commit message
read -p "Enter commit message: " commit_message

# Add all changes to the staging area
git add .

# Commit the changes with the provided message
git commit -m "$commit_message"

# Push the changes to the remote repository
git push
