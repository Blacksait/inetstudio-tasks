<?php

/**
 * №5
 *
 * Выбрать без join-ов и подзапросов все департаменты, в которых есть мужчины,
 * и все они (каждый) поставили высокую оценку (строго выше 5).
 */

$query = "SELECT
	d.*
FROM
	evaluations e,
	departments d
WHERE
	e.gender = 1
	AND e.value > 5
	AND d.id = e.department_id";