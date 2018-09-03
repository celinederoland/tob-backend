create table banks
(
  id int auto_increment,
  title varchar(30) not null,
  constraint banks_id_uindex
  unique (id),
  constraint banks_title_uindex
  unique (title)
)
;

alter table banks
  add primary key (id)
;

create table categories
(
  id int auto_increment,
  title varchar(100) not null,
  constraint categories_title_uindex
  unique (title),
  constraint category_id_uindex
  unique (id)
)
;

alter table categories
  add primary key (id)
;

create table currencies
(
  id int auto_increment,
  title varchar(3) not null,
  constraint currencies_id_uindex
  unique (id),
  constraint currencies_title_uindex
  unique (title)
)
;

alter table currencies
  add primary key (id)
;

create table subcategories
(
  id int auto_increment,
  title varchar(100) not null,
  category_id int not null,
  constraint subcategories_category_id_title_pk
  unique (category_id, title),
  constraint subcategory_id_uindex
  unique (id),
  constraint subcategory_category_id_fk
  foreign key (category_id) references categories (id)
)
;

alter table subcategories
  add primary key (id)
;

create table usages
(
  id int auto_increment,
  title varchar(50) not null,
  constraint usages_id_uindex
  unique (id),
  constraint usages_title_uindex
  unique (title)
)
;

alter table usages
  add primary key (id)
;

create table accounts
(
  id int auto_increment,
  title varchar(100) null,
  bank_id int not null,
  currency_id int not null,
  usage_id int null,
  constraint accounts_id_uindex
  unique (id),
  constraint accounts_banks_id_fk
  foreign key (bank_id) references banks (id),
  constraint accounts_currencies_id_fk
  foreign key (currency_id) references currencies (id),
  constraint accounts_types_id_fk
  foreign key (usage_id) references usages (id)
)
;

alter table accounts
  add primary key (id)
;

create table transactions
(
  id int auto_increment,
  title varchar(255) not null,
  amount decimal(10,2) not null,
  date date not null,
  sub_category_id int not null,
  account_id int not null,
  constraint transactions_id_uindex
  unique (id),
  constraint transactions_accounts_id_fk
  foreign key (account_id) references accounts (id),
  constraint transactions_subcategories_id_fk
  foreign key (sub_category_id) references subcategories (id)
)
;

alter table transactions
  add primary key (id)
;

create table csv_remember
(
  id int auto_increment,
  date_field varchar(10) not null,
  text_field varchar(255) not null,
  amount decimal(10,2) not null,
  transaction_id int not null,
  constraint csv_remember_id_uindex
  unique (id),
  constraint csv_remember_transactions_id_fk
  foreign key (transaction_id) references transactions (id)
)
;

alter table csv_remember
  add primary key (id)
;

create view view_accounts as select `accountancy`.`accounts`.`id`          AS `id`,
                                    `accountancy`.`accounts`.`title`       AS `title`,
                                    `accountancy`.`accounts`.`bank_id`     AS `bank_id`,
                                    `accountancy`.`accounts`.`currency_id` AS `currency_id`,
                                    `accountancy`.`accounts`.`usage_id`    AS `usage_id`,
                                    `accountancy`.`banks`.`title`          AS `bank_title`,
                                    `accountancy`.`currencies`.`title`     AS `currency_title`,
                                    `accountancy`.`usages`.`title`         AS `usage_title`
                             from (((`accountancy`.`accounts` join `accountancy`.`banks` on ((`accountancy`.`banks`.`id` =
                                                                                              `accountancy`.`accounts`.`bank_id`))) join `accountancy`.`currencies` on ((
                               `accountancy`.`currencies`.`id` = `accountancy`.`accounts`.`currency_id`))) join `accountancy`.`usages` on ((
                               `accountancy`.`usages`.`id` = `accountancy`.`accounts`.`usage_id`)))
;

create view view_transactions as select `accountancy`.`transactions`.`id`        AS `id`,
                                        `accountancy`.`transactions`.`title`     AS `title`,
                                        `accountancy`.`transactions`.`amount`    AS `amount`,
                                        `accountancy`.`transactions`.`date`      AS `date`,
                                        `accountancy`.`categories`.`title`       AS `category`,
                                        `accountancy`.`subcategories`.`title`    AS `subcategory`,
                                        concat(`view_accounts`.`bank_title`, ' - ', `view_accounts`.`title`, ' - ',
                                               `view_accounts`.`currency_title`) AS `accout`
                                 from (((`accountancy`.`transactions` left join `accountancy`.`subcategories` on ((`accountancy`.`subcategories`.`id` =
                                                                                                                   `accountancy`.`transactions`.`sub_category_id`))) left join `accountancy`.`categories` on ((
                                   `accountancy`.`categories`.`id` =
                                   `accountancy`.`subcategories`.`category_id`))) left join `accountancy`.`view_accounts` on ((`view_accounts`.`id` =
                                                                                                                               `accountancy`.`transactions`.`account_id`)))
;

create view view_transactions_global as select `accountancy`.`transactions`.`id`                                                        AS `id`,
                                               `accountancy`.`transactions`.`title`                                                     AS `title`,
                                               `accountancy`.`transactions`.`amount`                                                    AS `amount`,
                                               `accountancy`.`transactions`.`date`                                                      AS `date`,
                                               `accountancy`.`categories`.`id`                                                          AS `category_id`,
                                               `accountancy`.`transactions`.`sub_category_id`                                           AS `sub_category_id`,
                                               `accountancy`.`transactions`.`account_id`                                                AS `account_id`,
                                               `view_accounts`.`bank_id`                                                                AS `bank_id`,
                                               `view_accounts`.`currency_id`                                                            AS `currency_id`,
                                               `view_accounts`.`usage_id`                                                               AS `usage_id`,
                                               concat(`accountancy`.`categories`.`title`, ' - ', `accountancy`.`subcategories`.`title`) AS `category`,
                                               concat(`view_accounts`.`bank_title`, ' - ', `view_accounts`.`title`, ' - ',
                                                      `view_accounts`.`currency_title`)                                                 AS `account`
                                        from (((`accountancy`.`transactions` join `accountancy`.`subcategories` on ((`accountancy`.`subcategories`.`id` =
                                                                                                                     `accountancy`.`transactions`.`sub_category_id`))) join `accountancy`.`categories` on ((
                                          `accountancy`.`categories`.`id` =
                                          `accountancy`.`subcategories`.`category_id`))) join `accountancy`.`view_accounts` on ((`view_accounts`.`id` =
                                                                                                                                 `accountancy`.`transactions`.`account_id`)))
;

create view view_transactions_structure as select `accountancy`.`transactions`.`id`              AS `id`,
                                                  `accountancy`.`transactions`.`title`           AS `title`,
                                                  `accountancy`.`transactions`.`amount`          AS `amount`,
                                                  `accountancy`.`transactions`.`date`            AS `date`,
                                                  `accountancy`.`categories`.`id`                AS `category_id`,
                                                  `accountancy`.`transactions`.`sub_category_id` AS `sub_category_id`,
                                                  `accountancy`.`transactions`.`account_id`      AS `account_id`,
                                                  `view_accounts`.`bank_id`                      AS `bank_id`,
                                                  `view_accounts`.`currency_id`                  AS `currency_id`,
                                                  `view_accounts`.`usage_id`                     AS `usage_id`
                                           from (((`accountancy`.`transactions` join `accountancy`.`subcategories` on ((`accountancy`.`subcategories`.`id` =
                                                                                                                        `accountancy`.`transactions`.`sub_category_id`))) join `accountancy`.`categories` on ((
                                             `accountancy`.`categories`.`id` =
                                             `accountancy`.`subcategories`.`category_id`))) join `accountancy`.`view_accounts` on ((`view_accounts`.`id` =
                                                                                                                                    `accountancy`.`transactions`.`account_id`)))
;

