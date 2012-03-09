SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE entries (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      user_id int(11) NOT NULL,
      vote_id int(11) NOT NULL,
      `comment` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      is_tweet tinyint(4) NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id),
      UNIQUE KEY IDX_USER_ID_VOTE_ID (user_id,vote_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE entry_items (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      entry_id int(11) NOT NULL,
      vote_item_id int(11) NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE statuses (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

CREATE TABLE users (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      tw_user_id int(11) NOT NULL,
      tw_user_name varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      tw_user_icon varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      tw_access_token_key varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      tw_access_token_secret varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      accessed datetime NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE votes (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      description varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      user_id int(11) NOT NULL,
      vote_type_id int(11) NOT NULL,
      start_date datetime DEFAULT NULL,
      end_date datetime DEFAULT NULL,
      vote_count int(11) NOT NULL,
      access_count int(11) NOT NULL,
      status_id int(11) NOT NULL,
      user_modified datetime NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

CREATE TABLE vote_items (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      description varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      url varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
      vote_count int(11) NOT NULL,
      sort_no tinyint(4) NOT NULL,
      user_modified datetime NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE vote_types (
      id int(11) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      sort_no tinyint(4) NOT NULL,
      created datetime NOT NULL,
      modified datetime NOT NULL,
      PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

INSERT INTO statuses VALUES(1, '公開', NOW(), NOW());
INSERT INTO statuses VALUES(2, '限定公開', NOW(), NOW());
INSERT INTO statuses VALUES(3, '非公開', NOW(), NOW());

INSERT INTO vote_types VALUES(1, '単一選択', 1, NOW(), NOW());
INSERT INTO vote_types VALUES(2, '複数選択', 2, NOW(), NOW());

