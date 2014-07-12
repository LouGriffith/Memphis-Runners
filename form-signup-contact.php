<?php 
  $title = "Signup Form";
  include("includes/head.php"); 
?>
    
    <!-- Nav and Banner -->
    <header>
      <?php include("includes/nav.php"); ?>    
    </header>
    
    <!-- End Header -->

    <!-- Main Content Section -->

    
    <div class="row page">
      <div class="large-8 columns">

        <div class="row">
          <h3>Membership Signup</h3>
        </div>

        <form>
          <div class="row">
            
            <fieldset>
              <legend>RacesOnline.com Profile</legend>

              <div class="row">
                <div class="large-12 columns">
                  <p>A RacesOnline.com profile will allow you to store and edit your personal information for later use.</p>
                  <a href="/" class="button">Use RacesOnline.com Profile</a>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Mailing Information</legend>

              <div class="row">
                <div class="large-4 columns">
                  <label>First Name
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-6 columns left">
                  <label>Last Name
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

              <div class="row">
                <div class="large-12 columns">
                  <label>Street Address
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>

              <div class="row">
                <div class="large-4 columns">
                  <label>Apt
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              
              <div class="row">
                <div class="large-4 columns">
                  <label>City
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-6 columns">
                  <label>State
                    <select>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
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
  
                  </label>
                </div>

                <div class="large-2 columns">
                  <label>Zip
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Contact Information</legend>
              
              <div class="row">
                <div class="large-8 columns left">
                  <label>Email
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-4 columns left">
                  <label>Phone
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <a href="form-signup-billing.php" class="button right">Contact ></a>

          </div>
        </form>
      
      </div>

      <div class="large-4 columns">
        <div class="panel">
          <h5>Club Bylaws:</h5>
          <p>Click here to read our bylaws online (revised March, 2008)</p>
        </div>

        <div class="panel">
          <h5>Membership &amp; Benefits:</h5>
          <p>The benefits of being a club member far outweigh the membership fee.  For the cost of membership you will receive discounts on athletic merchandise at select local athletic stores, the RoadRunner newsletter sent to your home, discounted entry fees at most races, club events, and a club that works hard for you!  Find out more about the benefits of being a MRTC club member.</p>
        </div>
      </div>
    </div>
    
<?php include("includes/footer.php"); ?>
