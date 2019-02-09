<?php
$title = "Book Your Trip";
include '_top.php';
?>

<div class="form">
    <div class="column">
        <h1 class="title">Book a Cruise</h1>
        <label for="fullname">Fullname</label><br>
        <input type="text" id="fullname" name="fullname" required
       minlength="4" maxlength="200" size="200"><br>
       <label for="addressline">Address Line</label><br>
        <input type="text" id="addressline" name="addressline"
       minlength="4" maxlength="200" size="200"><br>
       <label for="city">City</label><br>
        <input type="text" id="city" name="city"
       minlength="4" maxlength="200" size="200"><br>
       <label for="state">State</label><br>
       <form action="" method="get">
        <select name="state" class="states">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>

        </form><br>
       <label for="zipcode">Zipcode</label><br>
        <input type="text" id="zipcode" name="zipcode"
       minlength="4" maxlength="200" size="200"><br>
       <label for="phonenumber">Phone Number</label><br>
        <input type="text" id="phonenumber" name="phonenumber"
       minlength="4" maxlength="200" size="200"><br>
       <label for="emailaddress">Email Address</label><br>
        <input type="text" id="emailaddress" name="emailaddress" required
       minlength="4" maxlength="200" size="200"><br>
       <label for="state">Cruises</label><br>
       <form action="" method="get">
        <select name="cruises" class="cruises">
            <option value="Alfo Nero">Alfa Nero</option>
            <option value="Savannah">Savannah</option>
            <option value="Seven Sins">Seven Sins</option>
            <option value="Solo">Solo</option>
        </select>
</form>
<br>
       <button class="button button2">Book My Cruise</button>
       
    </div>
</div>

<?php include '_bot.php' ?>