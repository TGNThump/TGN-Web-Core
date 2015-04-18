<?php
shell_exec("/usr/bin/git --work-tree=/home/terra/www/core.terragaming.co.uk --git-dir=/home/terra/www/core.terragaming.co.uk/.git pull origin develop 2>&1");
shell_exec("/usr/bin/git --work-tree=/home/terra/www/core.terragaming.co.uk --git-dir=/home/terra/www/core.terragaming.co.uk/.git checkout -f develop 2>&1");
?>
