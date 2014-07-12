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

        <form>

          <div class="row">
            <h3>Membership Signup</h3>
          </div>

          <div class="row">
            
            <fieldset>
              <legend>Individual Membership</legend>
            
              <div class="small-8 columns">
                <input type="radio" name="membership" value="1" id="individual_1">
                <label for="pokemonRed">1 Year</label>
              </div>

              <div class="small-4 columns">
                <label for="individual_1">$24.00</label>
              </div>
              <!-- row -->
              
              <div class="small-8 columns">
                <input type="radio" name="membership" value="2" id="individual_2">
                <label for="pokemonRed">2 Years</label>
              </div>

              <div class="small-4 columns">
                <label for="individual_2">$45.00</label>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Household Membership</legend>

              <div class="small-8 columns">
                <input type="radio" name="membership" value="1" id="household_1">
                <label for="pokemonRed">1 Year</label>
              </div>

              <div class="small-4 columns">
                <label for="household_1">$30.00</label>
              </div>
              <!-- row -->

              <div class="small-8 columns">
                <input type="radio" name="membership" value="2" id="household_2">
                <label for="pokemonRed">2 Years</label>
              </div>

              <div class="small-4 columns">
                <label for="household_2">$55.00</label>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Full-time Student <em>(25 years and under)</em></legend>

              <div class="small-8 columns">
                <input type="radio" name="membership" value="1" id="student_1">
                <label for="pokemonRed">1 Year</label>
              </div>

              <div class="small-4 columns">
                <label for="student_1">$15.00</label>
              </div>
              <!-- row -->

              <div class="small-8 columns">
                <input type="radio" name="membership" value="2" id="student_2">
                <label for="pokemonRed">2 Years</label>
              </div>

              <div class="small-4 columns">
                <label for="student_2">$18.00</label>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Lifetime Membership <em>(includes commemorative garment)</em></legend>

              <div class="small-8 columns">
                <input type="radio" name="membership" value="0" id="lifetime">
                <label for="pokemonRed">Lifetime Membership</label>
              </div>

              <div class="small-4 columns">
                <label for="lifetime">$500.00</label>
              </div>
              <!-- row -->

            </fieldset>

            <a href="form-signup-participant.php" class="button right">Participant ></a>


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
