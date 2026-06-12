<?php

return [
    'up' => function(PDO $db) {
        $db->exec("CREATE TABLE IF NOT EXISTS role_permissions (
            role_id INT NOT NULL,
            permission_id INT NOT NULL,
            PRIMARY KEY (role_id, permission_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    },

    'down' => function(PDO $db) {
        $db->exec("DROP TABLE IF EXISTS role_permissions;");
    }
];
