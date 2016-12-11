# SpiceBlogUpdate

Previously there was two other repositories, but because of some errors with pushing, pulling and merging, we had to create other repositories. These repositories can be located at https://github.com/aaronmccormack15533/SnowWorriesWebApps and https://github.com/aaronmccormack15533/SpiceBlog

References:
For small gallery on second page
https://www.bootstrapzero.com/bootstrap-template/the-firm

Bootstrap modal box
http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_modal&stacked=h

Review JSON
http://stackoverflow.com/questions/7895335/append-data-to-a-json-file-with-php
https://www.ibm.com/support/knowledgecenter/SSKM8N_8.0.0/com.ibm.etools.mft.doc/bc28414_.htm
http://www.webslesson.info/2016/04/append-data-to-json-file-using-php.html
https://www.tutorialspoint.com/json/json_quick_guide.htm

Login 
http://stackoverflow.com/questions/10346895/php-login-form-and-logout-button-not-showing-properly
https://www.tutorialspoint.com/php/php_mysql_login.htm
https://www.youtube.com/watch?v=e8TP2FERKls

Smooth Scroll
https://css-tricks.com/snippets/jquery/smooth-scrolling

Your Shouts Parse
http://php.net/manual/en/function.json-decode.php
http://www.dyn-web.com/tutorials/php-js/json/decode.php
https://www.youtube.com/watch?v=S57Q8G6daeI
http://stackoverflow.com/questions/29308898/how-do-i-extract-data-from-json-with-php

Scroll to Top on review pages
http://www.carrieloves.com/2014/08/how-to-install-a-scroll-to-top-button

Session id
http://php.net/manual/en/function.session-id.php

Commentsection.php
http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/create-html-form
https://www.youtube.com/watch?v=pW8nR5DjFP4
http://stackoverflow.com/questions/1171997/php-mysql-how-to-create-a-comment-section-in-your-website
https://www.youtube.com/watch?v=kWOuUkLtQZw
https://www.youtube.com/watch?v=1LmPeHX7RRo
https://www.youtube.com/watch?v=4pPGOF5MI4U

Dbh.php
http://www.w3schools.com/php/php_mysql_intro.asp
http://www.w3schools.com/php/php_mysql_connect.asp
https://www.youtube.com/watch?v=e8TP2FERKls

editcomments.php
https://www.youtube.com/watch?v=5wGDu-aigZs
https://www.youtube.com/watch?v=DhgXNPfzESc

Comments0.php
http://stackoverflow.com/questions/10626911/mysql-how-to-query-the-table-comments
https://www.youtube.com/watch?v=uDfO7-ywnL8
https://www.youtube.com/watch?v=W-FkqWUz0eE
http://stackoverflow.com/questions/21054423/php-delete-comments-button
http://php.net/manual/en/function.mysql-query.php
http://php.net/manual/en/ref.mysql.php
http://php.net/manual/en/mysqli-result.fetch-assoc.php
http://stackoverflow.com/questions/6344708/how-to-echo-an-input-of-an-textarea-with-line-breaks

Signup.php
http://php.net/manual/en/reserved.variables.server.php
http://stackoverflow.com/questions/7118823/check-if-url-has-certain-string-with-php
https://www.youtube.com/watch?v=e8TP2FERKls

Logout.inc.php
http://www.w3schools.com/php/php_sessions.asp
http://php.net/manual/en/function.session-destroy.php
https://www.youtube.com/watch?v=e8TP2FERKls
https://www.tutorialspoint.com/php/php_mysql_login.htm

Signup.inc.php
http://www.w3schools.com/php/func_mysqli_num_rows.asp
https://www.youtube.com/watch?v=t68aj7M3mPQ
https://www.youtube.com/watch?v=e8TP2FERKls
http://www.codingtweaks.com/39-how-to-create-a-login-system-php-beginners-tutorial/
https://www.tutorialspoint.com/php/mysql_insert_php.htm

Login.inc.php
http://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
https://www.youtube.com/watch?v=e8TP2FERKls
http://www.w3schools.com/sql/sql_select.asp

Captcha
https://www.phpcaptcha.org/documentation/quickstart-guide/



How to append JSON on Mac
My solution was:
Open applications folder
Locate XAMPP folder
Right click, get info (as described above)
In pop-up window locate the 'sharing & permission' section
Click the 'locked' padlock symbol
Enter admin password
Change 'Everyone' permissions to read & write
In the get info window still, select the 'cog' icon' drop down option at the very bottom and select 'Apply to enclosed items' this will adjust the permission across all sub-folders as well.
Re-lock the padlock symbol
Close the 'Get Info' window.
Task complete, this will now allow you to populate sub-folders within the htdocs folder as needed to populate your website(s).
------------------------------------------------------------------------------------------------------------------------
How to create Database
Use localhost/phpmyadmin
Created database has to be called - logintest;


Then create 2 tables




CREATE TABLE user(
	id int(11) NOT NULL auto_increment, 
	first VARCHAR(128) NOT NULL,
	last VARCHAR(128) NOT NULL,
	uid VARCHAR(128) NOT NULL,
	pwd VARCHAR(1000) NOT NULL,
	PRIMARY KEY (id)
);


--------------------------------------------------------------------------------------


CREATE TABLE comments(
    cid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) not null,
    date datetime not null,
     title text not null,
    message text not null
);
------------------------------------------------------------------------------------------------------------------------


