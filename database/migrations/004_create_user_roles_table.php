<?php

return [
    'up' => function(PDO $db) {
        $db->exec("CREATE TABLE IF NOT EXISTS user_roles (
            user_id INT NOT NULL,
            role_id INT NOT NULL,
            PRIMARY KEY (user_id, role_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    },

    'down' => function(PDO $db) {
        $db->exec("DROP TABLE IF EXISTS user_roles;");
    }
];
