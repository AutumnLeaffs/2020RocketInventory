<?php
session_start();
if (isset($_POST['item-enter'])) {
  require 'dbh.inc.php';

  $itemName = $_POST['itemName'];
  $itemPaint = $_POST['paint'];
  $itemCert = $_POST['certification'];
  $itemPrice = $_POST['price'];
  $rarity = $_POST['rarity'];
  $type = $_POST['type'];
  $specialEdition = $_POST['specialEdition'];
if (isset($_SESSION['userId'])){
 $idUsers=$_SESSION['userId'];
 header("Location: ../inventory.php?pass");
}
else {
  header("Location: ../account.php?log_in_to_add_items");
  exit(); //popup or something to tell you that you're not logged in
}

    $sql = "SELECT itemName FROM masterlist WHERE itemName=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../inventory.php?error=sqlerror");
      exit();
    }
    else
{
      mysqli_stmt_bind_param($stmt, "s", $itemName);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
        $sql = "INSERT INTO masterlist (itemName, paint, certification, price, idUsers, rarity, type, specialEdition) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../inventory.php?error=sqlerror");
          exit();
        }

        else
{
          if($rarity == "Common" || $rarity == "Premium" || $rarity == "Limited"){
            $itemPrice = 0;
          }
            else
{

              if($type == "Body"){
                    if($rarity == "Uncommon" || $rarity == "Rare" || $rarity == "Very Rare" || $rarity == "Black Market" ){

                        $itemPrice = 0;
                  }
                    else{
                        if($rarity == "Import"){
                            $itemPrice = 500;
                            if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                              $itemPrice += 200;
                            }
                            if($itemPaint == "Titanium White"){
                              $itemPrice += 300;
                            }
                        }
                        if($rarity == "Exotic"){
                            $itemPrice = 800;
                            if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                              $itemPrice += 200;
                          }
                            if($itemPaint == "Titanium White"){
                              $itemPrice += 300;
                            }

                      }

                  }
                }
                if($type == "Decal"){
                  if($rarity == "Uncommon"){

                      $itemPrice = 0;
                }
                  else{
                  if($rarity == "Rare"){
                      $itemPrice = 50;
                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                        $itemPrice += 50;
                      }
                      if($itemPaint == "Titanium White"){
                        $itemPrice += 100;
                      }
                  }

                  if($rarity == "Very Rare"){
                      $itemPrice = 100;
                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                        $itemPrice += 100;
                      }
                      if($itemPaint == "Titanium White"){
                        $itemPrice += 200;
                      }
                  }

                  if($rarity == "Import"){
                      $itemPrice = 300;
                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                        $itemPrice += 200;
                      }
                      if($itemPaint == "Titanium White"){
                        $itemPrice += 300;
                      }
                  }

                  if($rarity == "Exotic"){
                      $itemPrice = 700;
                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                        $itemPrice += 200;
                      }
                      if($itemPaint == "Titanium White"){
                        $itemPrice += 300;
                      }
                  }


                  if($rarity == "Black Market"){
                      $itemPrice = 2000;
                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                        $itemPrice += 200;
                    }
                      if($itemPaint == "Titanium White"){
                        $itemPrice += 500;
                      }

                }
              }

}
              if($type == "Paint Finish"){
                if($rarity == "Uncommon" || $rarity == "Exotic" || $rarity == "Black Market"){

                    $itemPrice = 0;
              }
                else{
                if($rarity == "Rare"){
                    $itemPrice = 100;

                }

                if($rarity == "Very Rare"){
                    $itemPrice = 200;

                }

                if($rarity == "Import"){
                    $itemPrice = 300;

                }



              }
              }
              if($type == "Wheel"){
                if($rarity == "Black Market"){

                    $itemPrice = 0;
              }
                else{
                if($rarity == "Rare"){
                    $itemPrice = 100;
                    if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                      $itemPrice += 50;
                    }
                    if($itemPaint == "Titanium White"){
                      $itemPrice += 100;
                    }
                }

                if($rarity == "Very Rare"){
                    $itemPrice = 200;
                    if($specialEdition == 1){
                      $itemPrice *= 2;
                    }
                    if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                      $itemPrice += 100;
                    }
                    if($itemPaint == "Titanium White"){
                      $itemPrice += 200;
                    }
                }

                if($rarity == "Import"){
                    $itemPrice = 400;
                    if($specialEdition == 1){
                      $itemPrice = 700;
                    }
                    if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                      $itemPrice += 200;
                    }
                    if($itemPaint == "Titanium White"){
                      $itemPrice += 300;
                    }
                }

                if($rarity == "Exotic" || $rarity == "Uncommon"){
                    $itemPrice = 700;
                    if($specialEdition == 1){
                      $itemPrice = 1100;
                    }
                    if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                      $itemPrice += 200;
                    }
                    if($itemPaint == "Titanium White"){
                      $itemPrice += 300;
                    }
                }



            }

                  }
                  if($type == "Rocket Boost"){
                        if($rarity == "Uncommon" || $rarity == "Rare" || $rarity == "Exotic" || $rarity == "Black Market" ){

                            $itemPrice = 0;
                          }
                          else{


                                    if($rarity == "Very Rare"){
                                $itemPrice = 200;
                                if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                  $itemPrice += 100;
                                }
                                if($itemPaint == "Titanium White"){
                                  $itemPrice += 200;
                                }
                                  }
                                    if($rarity == "Import"){
                                $itemPrice = 400;
                                if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                  $itemPrice += 200;
                              }
                                if($itemPaint == "Titanium White"){
                                  $itemPrice += 300;
                                }

                                    }



                      }
                    }
                    if($type == "Topper"){
                          if($rarity == "Uncommon" || $rarity == "Rare" || $rarity == "Import" || $rarity == "Black Market" || $rarity == "Exotic" ){

                              $itemPrice = 0;
                        }
                          else{
                              if($rarity == "Very Rare"){
                                  $itemPrice = 100;
                                  if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                    $itemPrice += 100;
                                  }
                                  if($itemPaint == "Titanium White"){
                                    $itemPrice += 200;
                                  }
                              }


                        }
                      }
                      if($type == "Goal Explosion"){
                            if($rarity == "Uncommon" || $rarity == "Rare" || $rarity == "Very Rare"){

                                $itemPrice = 0;
                          }
                            else{
                                if($rarity == "Import"){
                                    $itemPrice = 500;

                                }
                                if($rarity == "Exotic"){
                                    $itemPrice = 800;

                                }
                                if($rarity == "Black Market"){
                                    $itemPrice = 2000;
                                    if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                      $itemPrice += 200;
                                    }
                                    if($itemPaint == "Titanium White"){
                                      $itemPrice += 500;
                                    }
                                }


                          }
                        }
                        if($type == "Trail"){
                              if($rarity == "Uncommon" || $rarity == "Rare" || $rarity == "Import" || $rarity == "Exotic" || $rarity == "Black Market"){

                                  $itemPrice = 0;
                            }
                              else{
                                  if($rarity == "Very Rare"){
                                      $itemPrice = 200;
                                      if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                        $itemPrice += 100;
                                      }
                                      if($itemPaint == "Titanium White"){
                                        $itemPrice += 200;
                                      }

                                  }

                                  }


                            }
                            if($type == "Banner"){
                                  if($rarity == "Uncommon"  || $rarity == "Import" || $rarity == "Exotic" || $rarity == "Black Market"){

                                      $itemPrice = 0;
                                }
                                  else{
                                    if($rarity == "Rare"){
                                        $itemPrice = 100;
                                        if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                          $itemPrice += 50;
                                        }
                                        if($itemPaint == "Titanium White"){
                                          $itemPrice += 100;
                                        }

                                    }
                                      if($rarity == "Very Rare"){
                                          $itemPrice = 200;
                                          if($itemPaint != "Burnt Sienna" && $itemPaint != "Titanium White" && $itemPaint != NULL){
                                            $itemPrice += 100;
                                          }
                                          if($itemPaint == "Titanium White"){
                                            $itemPrice += 200;
                                          }

                                      }

                                      }


                                }




}
}
          if ($type == "Body"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../inventory.php?success=additem");
            exit();
          }
          if ($type == "Decal"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../decal.php?success=additem");
            exit();
          }
          if ($type == "Paint Finish"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../paint.php?success=additem");
            exit();
          }
          if ($type == "Wheel"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../wheel.php?success=additem");
            exit();
          }
          if ($type == "Rocket Boost"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../boost.php?success=additem");
            exit();
          }
          if ($type == "Topper"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../topper.php?success=additem");
            exit();
          }
          if ($type == "Goal Explosion"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../goalexplosion.php?success=additem");
            exit();
          }
          if ($type == "Trail"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../trail.php?success=additem");
            exit();
          }
          if ($type == "Banner"){
            mysqli_stmt_bind_param($stmt, "ssssssss", $itemName, $itemPaint,$itemCert,$itemPrice, $idUsers, $rarity, $type, $specialEdition);
            mysqli_stmt_execute($stmt);
            header("Location: ../banner.php?success=additem");
            exit();
          }
        }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
    header("Location: ../inventory.php");
    exit();
  }
