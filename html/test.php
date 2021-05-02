<?
$pdo = new PDO(
  'sqlite::memory:',
  null,
  null,
  array(PDO::ATTR_PERSISTENT => true)
);

var_dump($pdo);