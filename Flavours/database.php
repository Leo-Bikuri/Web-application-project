<?php
    $con = mysqli_connect("localhost","Leo","leomugambi23","flavours");
    if(!function_exists('write')){
    function write($query){
        require("database.php");
        if($results = $con->query($query)){
            return true;
        }else{
            return false;
        }    
    }
}

    if(!function_exists('read_customer')){
    function read_customer($statement){
        require("database.php");
        $result = $con ->query($statement);
        $row = $result->fetch_assoc();
        return $row;
    }
}
    
    if(!function_exists('instantiate_food')){
        function instantiate_food($row, $row2, $row3){
            if($row != -1 || $row2 != -1 || $row3 != -1){
            $dom = new DOMDocument('1.0');
            $div1 = $dom->createElement('div');
            $dom->appendChild($div1);
            $div1Attribute = $dom->createAttribute('class');
            $div1Attribute->value = "listings-col";
            $div1->appendChild($div1Attribute);
            
            //listing grid 1
            if($row != -1){
            $div2 = $dom->createElement('div');
            $div1->appendChild($div2);
            $div2Attribute = $dom->createAttribute('class');
            $div2Attribute->value = "listings-grid-element";
            $div2->appendChild($div2Attribute);

            $div3 = $dom->createElement('div');
            $div2->appendChild($div3);
            $div3Attribute = $dom->createAttribute('class');
            $div3Attribute->value = "image";
            $div3->appendChild($div3Attribute);

            $img = $dom->createElement('img');
            $div3->appendChild($img);
            $imgAttribute = $dom->createAttribute('src');
            $imgAttribute->value = "food_images/".$row['image'];
            $img->appendChild($imgAttribute);

            $div4 = $dom->createElement('div');
            $div2->appendChild($div4);
            $div4Attribute = $dom->createAttribute('class');
            $div4Attribute->value = "text";
            $div4->appendChild($div4Attribute);

            $div5 = $dom->createElement('div');
            $div4->appendChild($div5);
            $div5Attribute = $dom->createAttribute('class');
            $div5Attribute->value = "text-title";
            $div5->appendChild($div5Attribute);

            $h3 = $dom->createElement('h3', $row['name']);
            $div5->appendChild($h3);

            $div6 = $dom->createElement('div');
            $div5->appendChild($div6);
            $div6Attribute = $dom->createAttribute('class');
            $div6Attribute-> value="info";
            $div6->appendChild($div6Attribute);

            $span1 = $dom->createElement('span', "Ksh ".$row['price']." | Delivery fee 150");
            $div6->appendChild($span1);

            $span2 = $dom->createElement('span');
            $div6->appendChild($span2);

            $button = $dom->createElement('button', "Add to cart");
            $span2->appendChild($button);
            $buttonAttribute = $dom->createAttribute('type');
            $buttonAttribute-> value="submit";
            $buttonAttribute2 = $dom->createAttribute('class');
            $buttonAttribute2-> value="cart";
            $buttonAttribute3 = $dom->createAttribute('value');
            $buttonAttribute3-> value = $row['food_id'];
            $buttonAttribute4 = $dom->createAttribute('name');
            $buttonAttribute4-> value = "order";
            $buttonAttribute5 = $dom->createAttribute('title');
            $buttonAttribute5-> value = "Pressing multiple times increases quantity";
            $button->appendChild($buttonAttribute);
            $button->appendChild($buttonAttribute2);
            $button->appendChild($buttonAttribute3);
            $button->appendChild($buttonAttribute4);
            $button->appendchild($buttonAttribute5);
            

            $icon = $dom->createElement('i');
            $button->appendChild($icon);
            $iconAttribute = $dom->createAttribute("class");
            $iconAttribute->value="fas fa-shopping-basket";
            $icon->appendChild($iconAttribute);
            }
            //listing grid 2
            if($row2 != -1){
            $div7 = $dom->createElement('div');
            $div1->appendChild($div7);
            $div7Attribute = $dom->createAttribute('class');
            $div7Attribute->value = "listings-grid-element";
            $div7->appendChild($div7Attribute);

            $div8 = $dom->createElement('div');
            $div7->appendChild($div8);
            $div8Attribute = $dom->createAttribute('class');
            $div8Attribute->value = "image";
            $div8->appendChild($div8Attribute);

            $img2 = $dom->createElement('img');
            $div8->appendChild($img2);
            $img2Attribute = $dom->createAttribute('src');
            $img2Attribute->value = "food_images/".$row2['image'];
            $img2->appendChild($img2Attribute);

            $div9 = $dom->createElement('div');
            $div7->appendChild($div9);
            $div9Attribute = $dom->createAttribute('class');
            $div9Attribute->value = "text";
            $div9->appendChild($div9Attribute);

            $div10 = $dom->createElement('div');
            $div9->appendChild($div10);
            $div10Attribute = $dom->createAttribute('class');
            $div10Attribute->value = "text-title";
            $div10->appendChild($div10Attribute);

            $h3_2 = $dom->createElement('h3', $row2['name']);
            $div10->appendChild($h3_2);

            $div11 = $dom->createElement('div');
            $div10->appendChild($div11);
            $div11Attribute = $dom->createAttribute('class');
            $div11Attribute-> value="info";
            $div11->appendChild($div11Attribute);

            $span1_2 = $dom->createElement('span', "Ksh ".$row2['price']." | Delivery fee 150");
            $div11->appendChild($span1_2);

            $span2_2 = $dom->createElement('span');
            $div11->appendChild($span2_2);

            $button2 = $dom->createElement('button', "Add to cart");
            $span2_2->appendChild($button2);
            $button2Attribute = $dom->createAttribute('type');
            $button2Attribute-> value="submit";
            $button2Attribute2 = $dom->createAttribute('class');
            $button2Attribute2-> value="cart";
            $button2Attribute3 = $dom->createAttribute('value');
            $button2Attribute3-> value = $row2['food_id'];
            $button2Attribute4 = $dom->createAttribute('name');
            $button2Attribute4-> value = "order";
            $button2Attribute5 = $dom->createAttribute('title');
            $button2Attribute5-> value = "Pressing multiple times increases quantity";
            $button2->appendChild($button2Attribute);
            $button2->appendChild($button2Attribute2);
            $button2->appendChild($button2Attribute3);
            $button2->appendChild($button2Attribute4);
            $button2->appendChild($button2Attribute5);


            $icon2 = $dom->createElement('i');
            $button2->appendChild($icon2);
            $icon2Attribute = $dom->createAttribute("class");
            $icon2Attribute->value="fas fa-shopping-basket";
            $icon2->appendChild($icon2Attribute);
            }
            //listing grid 3
            if($row3 != -1){
            $div12 = $dom->createElement('div');
            $div1->appendChild($div12);
            $div12Attribute = $dom->createAttribute('class');
            $div12Attribute->value = "listings-grid-element";
            $div12->appendChild($div12Attribute);

            $div13 = $dom->createElement('div');
            $div12->appendChild($div13);
            $div13Attribute = $dom->createAttribute('class');
            $div13Attribute->value = "image";
            $div13->appendChild($div13Attribute);

            $img3 = $dom->createElement('img');
            $div13->appendChild($img3);
            $img3Attribute = $dom->createAttribute('src');
            $img3Attribute->value = "food_images/".$row3['image'];
            $img3->appendChild($img3Attribute);

            $div14 = $dom->createElement('div');
            $div12->appendChild($div14);
            $div14Attribute = $dom->createAttribute('class');
            $div14Attribute->value = "text";
            $div14->appendChild($div14Attribute);

            $div15 = $dom->createElement('div');
            $div14->appendChild($div15);
            $div15Attribute = $dom->createAttribute('class');
            $div15Attribute->value = "text-title";
            $div15->appendChild($div15Attribute);

            $h3_3 = $dom->createElement('h3', $row3['name']);
            $div15->appendChild($h3_3);

            $div16 = $dom->createElement('div');
            $div15->appendChild($div16);
            $div16Attribute = $dom->createAttribute('class');
            $div16Attribute-> value="info";
            $div16->appendChild($div16Attribute);

            $span1_3 = $dom->createElement('span', "Ksh ".$row3['price']." | Delivery fee 150");
            $div16->appendChild($span1_3);

            $span2_3 = $dom->createElement('span');
            $div16->appendChild($span2_3);

            $button3 = $dom->createElement('button', "Add to cart");
            $span2_3->appendChild($button3);
            $button3Attribute = $dom->createAttribute('type');
            $button3Attribute-> value="submit";
            $button3Attribute2 = $dom->createAttribute('class');
            $button3Attribute2-> value="cart";
            $button3Attribute3 = $dom->createAttribute('value');
            $button3Attribute4 = $dom->createAttribute('name');
            $button3Attribute4-> value = "order";
            $button3Attribute3-> value = $row3['food_id'];
            $button3Attribute5 = $dom->createAttribute('title');
            $button3Attribute5-> value = "Pressing multiple times increases quantity";
            $button3->appendChild($button3Attribute);
            $button3->appendChild($button3Attribute2);
            $button3->appendChild($button3Attribute3);
            $button3->appendChild($button3Attribute4);
            $button3->appendChild($button3Attribute5);

            $icon3 = $dom->createElement('i');
            $button3->appendChild($icon3);
            $icon3Attribute = $dom->createAttribute("class");
            $icon3Attribute->value="fas fa-shopping-basket";
            $icon3->appendChild($icon3Attribute);
            }

            echo $dom->saveHTML();
        }
        }
    }

    if(!function_exists('checkbreakfast')){
    function checkbreakfast($row){
        if($row['category']=="breakfast"){
            return $row;
        }
        else{
            return -1;
        }
    }
}

if(!function_exists('checklunch')){
    function checklunch($row){
        if($row['category'] == "lunch"){
            return $row;
        }
        else{
            return -1;
        }
    }
}

if(isset($_POST["delete"])){
    session_start();
    $id = (int)$_SESSION['user_id'];
    $sql = "DELETE FROM `flavours_cust` WHERE `customer_id` = $id";
            if($con -> query($sql)){
                header("Location:Homepage.php");
                echo '<script>alert("Sad to see you leave us")</script>';
            }else{
                echo '<script>alert("Failed to delete account")</script>';
            }
}
?>