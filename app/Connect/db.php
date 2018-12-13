<?php

//namespace App\Connect;

 function getAll(){
  $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare('SELECT cheese.id, cheese.name, milks.type AS "lait", doughs.type, regions.name AS "fromages" FROM cheese
                                INNER JOIN milks ON cheese.milk_id=milks.id
                                INNER JOIN doughs ON cheese.dough_id=doughs.id
                                INNER JOIN regions ON cheese.region_id=regions.id
                                GROUP BY cheese.id, cheese.name, milks.type, doughs.type, regions.name;');
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
 }

 function getAllCheese(){
  $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare('SELECT * FROM cheese;');
  $request->execute();
  return $request->fetchAll();
 }

//$_SESSION['username'] = 'didi';
//addUserCheese($_SESSION['username']);

 function addUserCheese($pseudo,$cheese){
  $id = getOneId($pseudo);
  $connec = new PDO("mysql:dbname=cheesydex;host=localhost;charset=utf8", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO cheese_user (cheese_id, users_id) VALUES (:cheese,:id)");
  $request->execute([
    ":id" => $id,
    ":cheese" => $cheese,
  ]);
 }

 function deleteCheeseUser($id){
  $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare('DELETE FROM cheese_user WHERE id = :id');
  $request-execute([
    ":id" => $id
  ]);
 }

 function showUserCheese(){
   $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $request = $connec->prepare('SELECT cheese_id, milks.type AS "lait", doughs.type, regions.name FROM cheese_user
                                INNER JOIN milks ON cheese.milk_id=milks.id
                                INNER JOIN doughs ON cheese.dough_id=doughs.id
                                INNER JOIN regions ON cheese.region_id=regions.id');
   $request-execute();
   return $request->fetchAll(PDO::FETCH_ASSOC);
 }

 function getOneId($pseudo) {
   $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $request = $connec->prepare('SELECT id FROM users WHERE :pseudo');
   $request->execute([
    ":pseudo" => $pseudo,
  ]);
}

function getAllUsers(){
  $connec = new PDO('mysql:dbname=cheesydex;host=localhost;charset=utf8', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare('SELECT * FROM users');
  $request-execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);

}
