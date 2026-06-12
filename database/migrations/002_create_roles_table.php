<?php

return [
    'up' => function(PDO $db) {
        $db->exec("CREATE TABLE IF NOT EXISTS roles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) UNIQUE NOT NULL,
            description VARCHAR(255) NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    },

    'down' => function(PDO $db) {
        $db->exec("DROP TABLE IF EXISTS roles;");
    }
];
