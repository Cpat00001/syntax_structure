<?php include 'header.php'; ?>

<div class="container front_first_row" >
    <div class="row">
        <div class="col-8 tlo">
            <div class="tlo_in">
                <h5 class="center">Welcome. Front page of new idea</h5>
            </div>
        </div>
    </div>
</div>
<!-- second row - posts -->
<div class="container front_second_row" >
   
<h5>Check our last news</h5>
<!-- display posts horizontally  -> 3 in row -->
<div class="row">
<?php  do_shortcode('[category_news]'); ?>
 </div> <!-- end of row -->
</div>
<!-- Choose day of your visit DIV-->
<div class="container choose_day">
    <div class="row">
        <div class="col-sm-12 col-md-6" style="background-color:rgb(77, 168, 196);">
            <div class="row">
                <div class="col-12">
                    <h5>Select a day - Check opening hours</h5>
                </div>
                <div class="col-12">
                    <!-- form to choose a day -->
                    <form action=""> 
                    <select name="openhours" onchange="showOpenHours(this.value)">
                        <option value="">Select a day:</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6" style="background-color:rgb(186, 60, 176);">
            <h5>Check opening hours</h5>
            <div id="showHours"></div>
        </div>
    </div>
 </div>

 <!-- carousel -->
 <div class="container">
    <div class="row">
        <?php include_once 'carousel.php'; ?>
    </div>
 </div>
 <!-- end of carousel -->
 <div class="container" id="sticky_img_background">
     <div class="on_fixed_background">
        <h1 style="color:white;">electricity</h1>
        <h1 style="color:white;">future</h1>
        <h1 style="color:white;">eficiency</h1>
     </div>
    
    <!-- <h1 style="color:white;">some text here</h1>
    <h1 style="color:white;">some text here</h1> -->
 </div>
 <div class="container">
     <div class="row" id="discount">
         <div class="col-12 col-sm-5 col-md-4 col-lg-3" id="test">
            <div class="row">
                <div class="col-12 header_text" id="fifty_px">
                    <h5 id="capital_discount">Discounts zone:</h5>
                </div>
                <div class="col-12" id="discount_header"></div>
                <div class="col-12" id="fifty_px"></div>
             </div>             
         </div>
         <div class="col-12 col-sm-7 col-md-8 col-lg-9" style="background-color:rgb(186, 182, 169);padding:10px;">
             <h5>List of products</h5>
         </div>
     </div>
 </div>
 <?php include 'footer.php'; ?>



