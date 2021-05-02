# Wordpress with PDO (Experiment Project)

This project is using Wordpress from ```https://wordpress.org/```, version 5.7.

Current wordpress is using mysqli/mysql library to connect MySQL. This is hard to use another DB engines like PostgreSQL and SQLite. Therefore, this project tries to use PDO (PHP Data Object) for database connection for using another database engine.


# How to use PDO instead of mysql libary.

Write following functions using PDO,
- mysql_connect
- mysql_get_client_info
- mysql_real_escape_string
- mysql_query
- mysql_select_db
- mysql_ping
- mysql_error
- mysql_insert_id
- mysql_affected_rows

# TODO

- Fix Admin login problem. (Occuring some problems at current_user_can function in ```capabilities.php```)
- Find a method instead of using ```SELECT FOUND_ROWS()```
