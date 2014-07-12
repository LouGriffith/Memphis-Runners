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
            <p>Please read the following waiver(s) and disclaimer(s). You must agree by clicking the checkbox to continue. </p>
            <fieldset>
              <legend>RacesOnline.com waiver and disclaimer</legend>

              <div class="row">
                <div class="large-12 columns">
                    <textarea placeholder="small-12.columns">I understand that RacesOnline.com is not responsible for event refunds or transfers and that all questions, comments and issues should be directed to the Event Director.</textarea>
                </div>
              </div>
              <!-- row -->

              <div class="row">
                <div class="large-12 columns">
                  <input id="checkbox1" type="checkbox"><label for="checkbox1">I agree to the above RacesOnline.com waiver and disclaimer. </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>MEMBER’S RELEASE</legend>

              <div class="row">
                <div class="large-12 columns">
                    <textarea class="member-release" placeholder="small-12.columns">MEMBER’S RELEASE: I know that running and volunteering to work in club races are potentially hazardous activities. I certify that I am medically able to perform in these events and am in good health. I assume all risks associated with running and/or volunteering to work in MRTC sanctioned events, including but not limited to falls, contact with other participants, the effects of weather, including high heat or humidity, ice and snow, the condition of the road and traffic on the course, all such risks being known and accepted by me. Having read this waiver and knowing these facts, and in consideration of your acceptance of my application, I, the undersigned, intending to be legally bound, hereby for myself, for any minors over whom I have legal guardianship, & for anyone entitled to act on my behalf, my heirs,executors and administrators, waive and release any and all rights and claims for damages I may have against the MEMPHIS RUNNERS TRACK CLUB, RRCA, USATF, and any an all members thereof, and all further sponsors, their representatives and/or successors, from all claims or liability of any kind arising out of my participation in any MRTC officiated/sanction events, even though that liability may arise out of negligence or carelessness on the part of the persons named in this waiver. I grant permission to all of the foregoing to use my photographs, motion pictures, recordings or any other record of sanctioned events for any legitimate purpose. I have read and fully understand my release of liability and indemnification given hereinabove.</textarea>
                </div>
              </div>
              <!-- row -->

              <div class="row">
                <div class="large-12 columns">
                  <input id="checkbox1" type="checkbox"><label for="checkbox1">I agree to the above waiver and disclaimer.</label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>

              <div class="row">
                <div class="large-12 columns">
                  <p>Initials of participant over 18 years of age or parent/legal guardian of minor under 18 years of age or legal guardian of person with intellectual or developmental disabilities.</p>
                </div>
              </div>

              <div class="row">
                <div class="large-3 columns">
                  <label>Initials of participant
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>

            </fieldset>

            <input type="button" name="next" class="next right button" value="Submit" />

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
