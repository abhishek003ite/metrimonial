<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="<?php echo base_url(); ?>Auth/register" method="post">
	     <div class="row">
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
			      <input type="text" id="edit-name" name="firstname" value="" size="60" maxlength="60" class="form-text required">
			    </div>
	     	</div>
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
			      <input type="text" id="edit-pass" name="lastname" size="60" maxlength="128" class="form-text required">
			    </div>
	     	</div>
	     </div>
	     <div class="row">
	     	<div class="col-md-6">
	     		<div class="form-group">
		      <label for="edit-name">I am a <span class="form-required" title="This field is required.">*</span></label>
					<div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="sex" checked=""> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="sex"> Female
				        </label>
	                </div>
		    </div>
	     	</div>
	     	<div class="col-md-6">
	     		<div class="age_select">
		      <label for="edit-pass">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="date">
	                    <option value="">Date</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
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
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
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
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select name="year">
	                    <option value="">Year</option>
	                    <option value="1980">1980</option>
	                    <option value="1981">1981</option>
	                    <option value="1982">1982</option>
	                    <option value="1983">1983</option>
	                    <option value="1984">1984</option>
	                    <option value="1985">1985</option>
	                    <option value="1986">1986</option>
	                    <option value="1987">1987</option>
	                    <option value="1988">1988</option>
	                    <option value="1989">1989</option>
	                    <option value="1990">1990</option>
	                    <option value="1991">1991</option>
	                    <option value="1992">1992</option>
	                    <option value="1993">1993</option>
	                    <option value="1994">1994</option>
	                    <option value="1995">1995</option>
	                    <option value="1996">1996</option>
	                    <option value="1997">1997</option>
	                    <option value="1998">1998</option>
	                    <option value="1999">1999</option>
	                    <option value="2000">2000</option>
	                    <option value="2001">2001</option>
	                    <option value="2002">2002</option>
	                    <option value="2003">2003</option>
	                    <option value="2004">2004</option>
	                    <option value="2005">2005</option>
	                    <option value="2006">2006</option>
	                    <option value="2007">2007</option>
	                    <option value="2008">2008</option>
	                    <option value="2009">2009</option>
	                    <option value="2010">2010</option>
	                    <option value="2011">2011</option>
	                    <option value="2012">2012</option>
	                    <option value="2013">2013</option>
	                    <option value="2014">2014</option>
	                    <option value="2015">2015</option>
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
	     	</div>
	     </div>
	     <div class="row">
	     	<div class="col-md-6">
	     		<div class="form-group">
	     			<label for="religion">Religion <span class="form-required" title="This field is required.">* </span></label>
	     			<select name="religion" id="religion" class="form-control">
                         <option value="">Religion</option>
                         <?php foreach ($religion as $row) {
                         ?>
                         	<option value="<?php echo $row['code']; ?>"><?php echo $row['religionName']; ?></option>
                         <?php
                         } ?>
	     			</select>
	     		</div>
	     	</div>
	     	<div class="col-md-6">
	     		<div class="form-group">
	     			<label for="country">Country <span class="form-required" title="This field is required.">* </span></label>
	     			<select name="country" id="country" class="form-control">
                         <option value="">Country</option>
                         <?php foreach ($country as $row) {
                         ?>
                         	<option value="<?php echo $row['countryCode']; ?>"><?php echo $row['country']; ?></option>
                         <?php
                         } ?>
	     			</select>
	     		</div>
	     	</div>
	     </div>
	     <div class="row">
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="email">Email Address <span class="form-required" title="This field is required.">*</span></label>
			      <input type="email" id="edit-pass" name="email" id="email" size="60" maxlength="128" class="form-text required">
			    </div>
	     	</div>
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="rEmail">Retype Email <span class="form-required" title="This field is required.">*</span></label>
			      <input type="email" id="edit-pass" name="rEmail" id="rEmail" size="60" maxlength="128" class="form-text required">
			    </div>
	     	</div>
	     </div>
	     <div class="row">
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="password">Password <span class="form-required" title="This field is required.">*</span></label>
			      <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">
			    </div>
	     	</div>
	     	<div class="col-md-6">
	     		<div class="form-group">
			      <label for="cpassword">Confirm Password <span class="form-required" title="This field is required.">*</span></label>
			      <input type="password" id="cpassword" name="cpassword" size="60" maxlength="128" class="form-text required">
			    </div>
	     	</div>
	     </div>
	  	    
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" value="Submit" name="submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<?php $this->load->view('common/footer'); ?>