<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="BakeryClass.css">
<link rel="icon" type="image/x-icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f990495a-dc4a-477c-b015-93d6b197cee8/d7n7ni5-fcc1bcc0-95b7-4f8e-b5e0-293911be5c63.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y5OTA0OTVhLWRjNGEtNDc3Yy1iMDE1LTkzZDZiMTk3Y2VlOFwvZDduN25pNS1mY2MxYmNjMC05NWI3LTRmOGUtYjVlMC0yOTM5MTFiZTVjNjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.1UOD7LRBOATxegj8IHeikF8uuqcDxm7QElvPcLyVdw0">
<title>Home Page</title>
</head>
<body>
    <h1>Baking Class Form</h1>

    <form name="frm_baking_class" id="frm_baking_class" method="post" action="BakeryClass.php">
        <!-- Drop down list / select for what class you want to take -->
         <label for="sel_class">What class would you like to take?</label>
         <select id="sel_class" name="sel_class">
            <option value="">Select an option</option>
            <option value="basic_baking">Basic Baking</option>
            <option value="bread_baking">Bread Baking</option>
            <option value="pastry_baking">Pastry Baking</option>
            <option value="cake_decorating">Cake Decorating</option>
            <option value="holiday_baking">Holiday Baking</option>
         </select>
         
        <label for="sel_allergy">Do you have any food allergies?</label>
        <div id="sel_allergy">
            <!-- Puts the yes and no options on the same line -->
          <label>Yes<input type="radio"  name="sel_allergy" value="Yes">
          No<input type="radio"  name="sel_allergy" value="No"></label>
        </div>

         <div id="div_allergy" class="hidden">
            <label for="txt_reason">What allergies do you have? </label>
            <textarea id="txt_reason"name="txt_reason" rows="4" placeholder="List them here..."></textarea>
         </div>

         <label for="txt_comments">Any skills or recipes you would like to go over?</label>
         <textarea id="txt_comments" name="txt_comments" rows="4" placeholder="Add your comments here..."></textarea>
         <div class="char-counter" id="div_char_counter">0/250 characters</div>

         <button type="submit">Submit Form</button>

    </form>
<script>
    $(document).ready(function(){
        //show the div allergy and textarea if the customer has allergies
        $('input[name="sel_allergy"]').change(function(){
            if($(this).val() == "Yes"){
                //the div will appear
                $('#div_allergy').slideDown();
            } //if user has allergies
            else{ //div will dissapear
                $('#div_allergy').slideUp();
            }
        }); // closing yes/no  change event listener

        //add a character counter for the comments textarea
        $('#txt_comments').on('input', function(){
            var max_length = 250; //max length allowed
            var char_count = $(this).val().length; // current number of characters

            // update the current characters / total characters remaining
            $('#div_char_counter').text(`${char_count}/${max_length} characters`);
            
            // change the counter color when around the limit of charactes
            if (char_count > max_length){
                $('#div_char_counter').css('color', 'red');
            }
            else{
                $('#div_char_counter').css('color', 'black');
            }
        });
    }); //closing document.ready
</script>
</body>
</html>