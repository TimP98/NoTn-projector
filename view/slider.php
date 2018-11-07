<?php
session_start();
    $author = $_SESSION['author'];
    $name = $_SESSION['name'];
    $description = $_SESSION['description'];
    $thumbnail = $_SESSION['thumbnail'];

    echo"
        <div class='container'>
            <h2></h2>
            <div id='image-wrapper'>
            <div class='image-item i1'><img src='assets/images/1.jpg' alt=''>
                <span>HKU Animation's</span>
                <span>Maker: HKU</span>
                <span>Opleiding: HKU</span>
                <span>Een korte video met mooie animatie's </span>
            </div>
            <div class='image-item i2'><img src='assets/images/2.jpg' alt=''>
                <span>Titel: Crossdressen</span>
                <span>Maker: Johanna</span>
                <span>Opleiding: HKU</span> 
                <span>Een indrukwekkende video over crossdressen</span>
            </div>
            <div class='image-item i3'><img src='assets/images/3.jpg' alt=''> 
                <span>Titel: The molotov man</span>
                <span>Maker: Jan</span>
                <span>Opleiding: HKU</span> 
                <span>Een video over een man die graag molotov's gooit</span> 
            </div>
            <div class='image-item i4'><img src='assets/images/4.jpg' alt=''>
                <span>Titel: Gaming</span>
                <span>Maker: Johannes</span>
                <span>Opleiding: HKU</span> 
                <span>Een trailer voor de nieuwste coolste game</span>
            </div>
            <div class='image-item i5'><img src='assets/images/5.jpg' alt=''>
                <span>Titel: Wally's revenge</span>
                <span>Maker: Johan</span>
                <span>Opleiding: HKU</span> 
                <span>Een video over Wally met super krachten</span>
            </div>
            <div class='image-item i6'><img src='assets/images/6.jpg' alt=''>
                <span>Titel: Panda life</span>
                <span>Maker: Antje</span>
                <span>Opleiding: HKU</span> 
                <span>Een schattig panda beertje komt in aanraking met bellenblaas</span>
            </div>
            <div class='image-item i7'><img src='assets/images/7.jpg' alt=''>
                <span>Titel: Het leven van een struisvogel</span>
                <span>Maker: Nicolaas</span>
                <span>Opleiding: HKU</span> 
                <span>Struisvogels zijn leuker dan je denkt</span> 
            </div>
            <div class='image-item i8'><img src='assets/images/8.jpg' alt=''>
                <span>Titel: Het koraal</span>
                <span>Maker: Harland</span>
                <span>Opleiding: HKU</span> 
                <span>Beleef de schoonheid van het koraal in de caribbean</span>
            </div>
        </div>
    ";  
?>
