  
@echo off
git config --global user.email "chyhhwen@gmail.com"
git config --global user.name "chyhhwen"
git remote add origin https://github.com/creamgod45/skill-games.git
git add router
git add index.php
git add gitpush.bat
git add gitpush2.bat
git add .htaccess
git add mysql
git add docs
git add LICENSE
git commit -m "update(1.0)"
git push -u origin master