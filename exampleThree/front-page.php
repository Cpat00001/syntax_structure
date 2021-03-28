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
<?php include 'footer.php'; ?>
