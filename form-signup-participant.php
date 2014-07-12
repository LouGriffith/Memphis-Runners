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
              <legend>Participant</legend>

              <div class="row">
                <div class="large-4 columns">
                  <label>First Name
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-2 columns">
                  <label>Middle Initial
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-6 columns">
                  <label>Last Name
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

              <div class="row">
                <div class="large-4 columns">
                  <label>Gender
                    <select>
                      <option value="husker">Male</option>
                      <option value="starbuck">Female</option>
                    </select>
                  </label>
                </div>

                <div class="large-8 columns">
                  <label>Birthdate
                    <div class="row">
                      <select class="large-4 columns left">
                        <option>- Month -</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                                            
                      <select class="large-2 columns left">
                        <option>- Day -</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>

                      <select class="large-3 columns left">
                        <option>- Year -</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                      </select>
                    </div>
                  </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Contact Information</legend>

              <div class="row">
                <div class="large-12 columns">
                  <label>Email Address
                    <input type="email" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <fieldset>
              <legend>Survey Questions</legend>
              
              <div class="row">
                <div class="large-12 columns">
                  <label>If you are renewing, what is your current membership number?
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-12 columns">
                  <label>If you are renewing, what is your current membership number?
                    <input type="text" placeholder="" />
                  </label>
                </div>

                <div class="large-12 columns">
                  <label>How did you hear about MRTC?
                    <input type="text" placeholder="" />
                  </label>
                </div>
              </div>
              <!-- row -->

            </fieldset>

            <a href="form-signup-contact.php" class="button right">Contact ></a>
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
