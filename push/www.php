<?php
shell_exec("/usr/bin/git --work-tree=/home/terra/www/www.terragaming.co.uk --git-dir=/home/terra/www/www.terragaming.co.uk/.git pull origin master 2>&1");
shell_exec("/usr/bin/git --work-tree=/home/terra/www/www.terragaming.co.uk --git-dir=/home/terra/www/www.terragaming.co.uk/.git checkout -f master 2>&1");
?>
