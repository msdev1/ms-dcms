rmdir %0\..\database\master /s /q
mkdir %0\..\database\master
git clone https://github.com/msdev1/msdbpanel.git %0\..\database\master
git add .
git commit -m "Auto update script"
git push -u origin master