<?php
class Likes {

  public $database = null;

  public function __construct() {
    $this->database = DataBase::connect();
  }

  public function getLikesCounter($target_id, $item_id) {
    $get_info = $this->database->prepare("SELECT COUNT(`id`) FROM `wall_likes` WHERE `target_id` = :target_id AND `item_id` = :item_id");
    $get_info->execute(array(':target_id' => $target_id,
                             ':item_id' => $item_id)); 
    $row1 = $get_info->fetch(PDO::FETCH_ASSOC);
    return $row1;
  }


  public function isMyselfLike($target_id, $item_id) {
    $get_info = $this->database->prepare("SELECT `id` FROM `wall_likes` WHERE `target_id` = :target_id AND `item_id` = :item_id AND `owner_id` = :owner_id");
    $get_info->execute(array(':target_id' => $target_id,
                             ':item_id' => $item_id,
                             ':owner_id' => $_SESSION['user_id'])); 
    $row1 = $get_info->fetch(PDO::FETCH_ASSOC);
    return empty($row1['id']) ? true : false;
  }

  public function getDisLikesCounter($target_id, $item_id) {
    $get_info = $this->database->prepare("SELECT COUNT(`id`) FROM `wall_dis_likes` WHERE `target_id` = :target_id AND `item_id` = :item_id");
    $get_info->execute(array(':target_id' => $target_id,
                             ':item_id' => $item_id)); 
    $row1 = $get_info->fetch(PDO::FETCH_ASSOC);
    return $row1;
  }


  public function isMyselfDisLike($target_id, $item_id) {
    $get_info = $this->database->prepare("SELECT `id` FROM `wall_dis_likes` WHERE `target_id` = :target_id AND `item_id` = :item_id AND `owner_id` = :owner_id");
    $get_info->execute(array(':target_id' => $target_id,
                             ':item_id' => $item_id,
                             ':owner_id' => $_SESSION['user_id'])); 
    $row1 = $get_info->fetch(PDO::FETCH_ASSOC);
    return empty($row1['id']) ? true : false;
  }

}
?>