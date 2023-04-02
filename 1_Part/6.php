<?php

/**
 * №6
 *
 * В базе данных имеется таблица с товарами goods (id INTEGER, name TEXT), таблица с тегами tags (id INTEGER, name TEXT)
 * и таблица связи товаров и тегов goods_tags (tag_id INTEGER, goods_id INTEGER, UNIQUE(tag_id, goods_id)).
 * Выведите id и названия всех товаров, которые имеют все возможные теги в этой базе.
 */

$query = "SELECT
	gt.good_id as id,
	(SELECT g.name FROM	goods g	WHERE g.id = gt.good_id) as name
FROM
	goods_tags gt
GROUP BY
	gt.good_id
HAVING
	COUNT(gt.good_id) = (SELECT	COUNT(t.id)	FROM tags t)";