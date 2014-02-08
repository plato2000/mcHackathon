@echo off
cd /d C:\xampp\htdocs
del . /F /Q
cd /d C:\Users\Parth\Documents\GitHub\mcHackathon
xcopy /s/e C:\Users\Parth\Documents\GitHub\mcHackathon C:\xampp\htdocs