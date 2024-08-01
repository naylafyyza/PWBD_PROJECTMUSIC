CREATE TABLE "users" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "created_at" datetime, "updated_at" datetime);

INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "remember_token", "created_at", "updated_at") VALUES
(1, 'nyil', 'nyil@gmail.com', NULL, '$2y$12$FSTPtY/jRzlaVstZu05MIu3CtYi4qxFdq5ZRoItBCDe4RAyiUvVB2', 't9ak8Z3LxmaD99CapPxiJxRTZqUZH6uBjUcArDlHyE4xo7amB5Ax8ZppUu9n', '2024-07-21 05:40:05', '2024-07-21 05:40:05');