USE yeticave;

INSERT INTO categories SET name = 'Доски и лыжи', code_name = 'boards';
INSERT INTO categories SET name = 'Крепления', code_name = 'attachment';
INSERT INTO categories SET name = 'Ботинки', code_name = 'boots';
INSERT INTO categories SET name = 'Одежда', code_name = 'clothing';
INSERT INTO categories SET name = 'Инструменты', code_name = 'tools';
INSERT INTO categories SET name = 'Разное', code_name = 'other';

INSERT INTO users SET
  name = 'Игнат',
  email = 'ignat.v@gmail.com',
  password = '$2y$10$OqvsKHQwr0Wk6FMZDoHo1uHoXd4UdxJG/5UDtUiie00XaxMHrW8ka',
  registr_date = '2018-02-28 10:02:58',
  avatar = 'img/avatar.jpg';
INSERT INTO users SET
  name = 'Леночка',
  email = 'kitty_93@li.ru',
  password = '$2y$10$bWtSjUhwgggtxrnJ7rxmIe63ABubHQs0AS0hgnOo41IEdMHkYoSVa',
  registr_date = '2018-03-05 16:18:20';
INSERT INTO users SET
  name = 'Руслан',
  email = 'warrior07@mail.ru',
  password = '$2y$10$2OxpEH7narYpkOT1H5cApezuzh10tZEEQ2axgFOaKW.55LxIJBgWW',
  registr_date = '2018-03-12 14:12:25',
  avatar = 'img/user.jpg';
INSERT INTO users SET
  name = 'Константин',
  email = 'const.a@gmail.com',
  password = '$$2y$10$IahrWjJgPNjkvB985hc2TOX2O1e01sMi5RvqVktRYyIA4kK5evW/6',
  registr_date = '2018-03-20 22:36:02';
INSERT INTO users SET
  name = 'Оксана',
  email = 'kholmogorova@mail.ru',
  password = '$2y$10$luPG7JUuTw0qGQVEnbfuT.Dp2nRbX0nmk3BzOAk5hTwObxQpVw1qa',
  registr_date = '2018-03-20 23:00:21';
INSERT INTO users SET
  name = 'Василиса',
  email = 'vassilissa@rambler.ru',
  password = '$2y$10$1ubpl1jeJxpljq2.1yZ2teyRC.MlV450iTNSSPRN5GCk.nIlXmWxS',
  registr_date = '2018-03-12 14:12:25';

INSERT INTO lots SET
  name = '2014 Rossignol District Snowboard',
  img = 'img/lot-1.jpg',
  category_id = 1,
  creation_date = '2018-06-01',
  starting_rate = 10999,
  bet_rate = 50,
  description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
  bid_end_date = '2019-02-01',
  owner_id = 3;
INSERT INTO lots SET
  name = 'DC Ply Mens 2016/2017 Snowboard',
  img = 'img/lot-2.jpg',
  category_id = 1,
  creation_date = '2018-06-01',
  starting_rate = 159999,
  bet_rate = 500,
  description = 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
  bid_end_date = '2019-02-02',
  owner_id = 1;
INSERT INTO lots SET
  name = 'Крепления Union Contact Pro 2015 года размер L/XL',
  img = 'img/lot-3.jpg',
  category_id = 2,
  creation_date = '2018-06-01',
  starting_rate = 8000,
  bet_rate = 70,
  description = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
  bid_end_date = '2019-02-03',
  owner_id = 5;
INSERT INTO lots SET
  name = 'Ботинки для сноуборда DC Mutiny Charocal',
  img = 'img/lot-4.jpg',
  category_id = 3,
  creation_date = '2018-06-01',
  starting_rate = 10999,
  bet_rate = 60,
  description = 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.',
  bid_end_date = '2019-02-04',
  owner_id = 3;
INSERT INTO lots SET
  name = 'Куртка для сноуборда DC Mutiny Charocal',
  img = 'img/lot-5.jpg',
  category_id = 4,
  creation_date = '2018-06-01 10:00:00',
  starting_rate = 7500,
  bet_rate = 50,
  description = 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
  bid_end_date = '2019-02-05',
  owner_id = 2;
INSERT INTO lots SET
  name = 'Маска Oakley Canopy',
  img = 'img/lot-6.jpg',
  category_id = 6,
  creation_date = '2018-06-01 10:00:00',
  starting_rate = 5400,
  bet_rate = 100,
  description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
  bid_end_date = '2019-02-06',
  owner_id = 4;

INSERT INTO bets SET
  user_id = 2,
  lot_id = 1,
  bet_date = '2018-06-01 09:05:02',
  rate = 11099;
INSERT INTO bets SET
  user_id = 6,
  lot_id = 1,
  bet_date = '2018-06-01 10:05:02',
  rate = 11149;
INSERT INTO bets SET
  user_id = 5,
  lot_id = 1,
  bet_date = '2019-09-06 09:05:02',
  rate = 11249;
INSERT INTO bets SET
  user_id = 2,
  lot_id = 1,
  bet_date = '2019-12-22 23:05:00',
  rate = 11299;
INSERT INTO bets SET
  user_id = 1,
  lot_id = 1,
  bet_date = '2019-01-01 14:05:02',
  rate = 11349;
INSERT INTO bets SET
  user_id = 3,
  lot_id = 1,
  bet_date = '2020-01-11 02:05:02',
  rate = 12000;
INSERT INTO bets SET
  user_id = 6,
  lot_id = 2,
  bet_date = '2019-12-11 02:05:02',
  rate = 170000;
INSERT INTO bets SET
  user_id = 2,
  lot_id = 2,
  bet_date = '2020-01-11 02:05:02',
  rate = 170500;
INSERT INTO bets SET
  user_id = 1,
  lot_id = 3,
  bet_date = '2019-12-20 02:05:02',
  rate = 80500;
INSERT INTO bets SET
  user_id = 1,
  lot_id = 3,
  bet_date = '2019-12-29 12:05:02',
  rate = 82000;
INSERT INTO bets SET
  user_id = 1,
  lot_id = 3,
  bet_date = '2020-01-01 13:05:02',
  rate = 83000;
INSERT INTO bets SET
  user_id = 3,
  lot_id = 4,
  bet_date = '2019-12-31 23:05:02',
  rate = 11100;
INSERT INTO bets SET
  user_id = 3,
  lot_id = 4,
  bet_date = '2020-01-02 13:05:02',
  rate = 11100;
INSERT INTO bets SET
  user_id = 4,
  lot_id = 5,
  bet_date = '2019-12-31 23:25:02',
  rate = 8000;


