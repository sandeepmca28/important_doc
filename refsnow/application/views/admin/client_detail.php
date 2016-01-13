<?php
$this->load->view('admin/vwHeader');
?>
<script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({selector: 'textarea',
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        relative_urls: false,
        height: "500",
        width: 900
    });
</script>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Clients <small>Manage Client Module</small></h1>
            
            <ol class="breadcrumb">
                <li><a href="<?php echo HTTP_ADMIN_BASE_URL; ?>clients"><i class="icon-dashboard"></i> Clients Listing</a></li>
                <li class="active"><i class="icon-file-alt"></i> Detail</li>
                
                <button class=" hide btn btn-primary" type="button" style="float:right;">Add New User</button>
                <div style="clear: both;"></div>
                
            </ol>
            
        </div>

    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-12 ">

            <h3>Client detailed profile</h3>
            <hr>
            <form class="form-horizontal ">
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">UserName:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->username ?></p>
                       
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">First Name:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static text-capitalize"><?php echo $detail->client_first_name; ?></p>
                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Last Name:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static text-capitalize"><?php echo $detail->client_last_name ?></p>
                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Nic Name:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static text-capitalize"><?php echo $detail->client_nic_name; ?></p>
                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Primary Email:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_email ?></p>
                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Second Email:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_email2; ?></p>
                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Professional Email:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_proffessional_email; ?></p>
                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Phone 1:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_phone ?></p>
                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left ">Phone 2:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_cell_phone ?></p>
                        
                    </div>
                </div>
                  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">city:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_residence_city; ?></p>
                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">State:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->state; ?></p>
                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Country:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->country; ?></p>                        
                    </div>
                </div>
                  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">TER Handle:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_ter_handle; ?></p>                        
                    </div>
                </div>
                  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">PF11 ID:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_pf411_id; ?></p>                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">ECCIE Handle:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_eccie_handle; ?></p>                        
                    </div>
                </div>
                <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">DateCheck Handle:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_datecheck_handle; ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Other :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_other_handle; ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">How would you prefer to be contacted? :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                              <?php 
                              $arr=array('1'=>'All - email/text/call ',
                                      '2'=>'Email/text ',
                                      '3'=>'Email/call ',
                                      '4'=>'Email anytime',
                                      '5'=>'Email but, be discreet  ',
                                      '6'=>'Text with time limitations ',
                                      '7'=>'Phone Only ',
                                      '8'=>'Phone anytime  ',
                                      '9'=>'Phone anytime, leave voice mail  ',
                                      '10'=>'Phone anytime, do not leave voice mail  ',
                                      '11'=>'Phone with limitations  ',
                                      '12'=>'Do Not Call  ',
                                      '13'=>'Text anytime ',
                                      '14'=>'Text anytime but, be discreet ',
                                      '15'=>'Text with time limitations ',
                                      '16'=>'Do not text ',
                                      
                                      );
                              
                                      if(isset($detail->how_would_prefer_contacted))
                                      {
                                            $d_r = explode(',', $detail->how_would_prefer_contacted);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        </p>                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Client Special Instruction :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_special_instructions; ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Level of discretion ? :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                            <?php 
                            
                            if(!empty($detail->client_level_of_discretion))
                            {  
                                $d_r=array(
                                    '1'=>'Very discreet ',
                                    '2'=>'Moderate (with limitation)',
                                    '3'=>'No discretion needed',
                                ); 
                                
                                foreach ($d_r as $key => $value)
                                {
                                    if($detail->client_level_of_discretion==$key)
                                    {
                                        echo $value ."<br> ";
                                    }
                                }
                            }
                            ?>
                        </p>                        
                    </div>
                </div>  
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Age :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_age; ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Height :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_height; ?></p>                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Weight :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_weight; ?></p>                        
                    </div>
                </div>  <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Ethnicity :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php
                        
                        $d_r = array(
                             '1'=>'Caucasian',
                             '2'=>'Asian',
                             '3'=>'Pacific Islander',
                             '4'=>'Hispanic',
                             '5'=>'Middle Eastern',
                             '6'=>'Mixed Race',
                             '7'=>'African American',
                        );
                        foreach ($d_r as $key => $value)
                                {
                                    if($detail->client_ethnicity==$key)
                                    {
                                        echo $value ."<br> ";
                                    }
                                }
                       
                        
                        ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Profession :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                           
                        <?php 
                                     $arr=array('1'=>'Finance/Accounting ',
                                      '2'=>'Business/Management ',
                                      '3'=>'Technology  ',
                                      '4'=>'Health Care  ',
                                      '5'=>'Legal ',
                                      '6'=>'Engineering',
                                      '7'=>'Real Estate',  
                                      '8'=>'Skilled Trade',
                                      '9'=>'BioTech', 
                                      '10'=>'Goverment', 
                                      '11'=>'Entertainment',  
                                      '12'=>'Retired', 
                                      '13'=>'Retired', 
                                      );
                              
                                      if(isset($detail->client_proffession))
                                      {
                                            $d_r = explode(',', $detail->client_proffession);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                    </p>                        
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Other :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_proffession_other; ?></p>                        
                    </div>
                </div>  <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Do you prefer Incall or Outcall  :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                            
                            <?php 
                                     $arr=array('1'=>'Incall ',
                                      '2'=>'Incall or Outcall ',
                                      '3'=>'Outcall to Hotel ',
                                      '4'=>'Outcall to Residence ',
                                      
                                      );
                              
                                      if(isset($detail->client_prefer_incall_outcall))
                                      {
                                            $d_r = explode(',', $detail->client_prefer_incall_outcall);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                            
                            
                        </p>                        
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left"> Other Comment :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_prefer_incall_outcall_other; ?></p>                        
                    </div>
                </div>  <hr>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Clothing preference for Providers :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                        <?php 
                                     $arr=array('1'=>'Sexy Classy ',
                                      '2'=>'Sexy (short skirt or dress) ',
                                      '3'=>'Sexy underneath (Long coat over dress/skirt) ',
                                      '4'=>'Business attire (classy/professional) ',
                                      '5'=>'Business attire  (discreet)',
                                      '6'=>'Causal (jeans)',
                                      '7'=>'Girl next door',
                                      '8'=>'No preference'
                                      );
                              
                                      if(isset($detail->client_clothing_preference))
                                      {
                                            $d_r = explode(',', $detail->client_clothing_preference);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        
                        
                        
                        </p>                        
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left"> Special instructions :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_clothing_preference_instruction; ?></p>                        
                    </div>
                </div>  
                <hr>
                
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">What type of footwear do you prefer :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                        <?php 
                                     $arr=array('1'=>'Classy professional high heels ',
                                      '2'=>'Sexy high heels ',
                                      '3'=>'Boots  ',
                                      '4'=>'Low heels ',
                                      '5'=>'Flats ',
                                      '6'=>'No preference',
                                                                            
                                      );
                              
                                      if(isset($detail->client_what_type_of_footwear_prefer))
                                      {
                                            $d_r = explode(',', $detail->client_what_type_of_footwear_prefer);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        
                        </p>                        
                    </div>
                 </div> <hr>
                 
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Would you like for the provider to wear scented lotions or perfumes? :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                            <?php 
                                      echo ($detail->client_cented_lotion_perfume =='y')?'Yes':'No';
                              ?>
                        
                        </p>                        
                    </div>
                 </div> <hr>
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Fetishes :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_fetishes; ?></p>                        
                    </div>
                </div>  <hr>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Do you smoke :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_smoke; ?></p>                        
                    </div>
                </div>  
                   <div class="form-group">
                    <label class="col-sm-4 control-label label_left">How do you feel about the provider smoking? :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                        <?php 
                                     $arr=array('1'=>'Dislike ',
                                      '2'=>'Prefer only non­smokers ',
                                      '3'=>'It’s fine if provider doesn’t smoke during session   ',
                                      '4'=>'Smoking is fine ',
                                      '5'=>'420 friendly ',              
                                      );
                              
                                      if(isset($detail->client_feel_about_provider_smoking))
                                      {
                                            $d_r = explode(',', $detail->client_feel_about_provider_smoking);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        
                        </p>                        
                    </div>
                 </div> <hr>
                 
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Do you drink alcohol :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                        <?php 
                                     $arr=array('1'=>'Frequently ',
                                      '2'=>'Socially ',
                                      '3'=>'Moderately  ',
                                      '4'=>'Non­drinker ',
                                                  
                                      );
                              
                                      if(isset($detail->client_do_you_drink_alcohol))
                                      {
                                            $d_r = explode(',', $detail->client_do_you_drink_alcohol);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        
                        </p>                        
                    </div>
                 </div> 
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Preferences :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                            
                              
                        <?php 
                                     $arr=array('1'=>'Champange  ',
                                      '2'=>'Red wine ',
                                      '3'=>'White wine   ',
                                      '4'=>'Cocktail ',
                                      '5'=>'Hard alcohol ',
                                      '6'=>'Coffee ',
                                      '7'=>'Tea ',    
                                      '8'=>'Soda ',  
                                      '9'=>'Other ',  
                                      );
                              
                                      if(isset($detail->client_alcohol_preference))
                                      {
                                            $d_r = explode(',', $detail->client_alcohol_preference);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>
                        
                        </p>                        
                    </div>
                 </div><hr>
                   <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Do you have any Health problems:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                        
                            <?php 
                                      echo ($detail->client_health_problem =='y')?'Yes':'No';
                              ?>
                        
                        </p>                        
                    </div>
                 </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Other :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_health_problem_other; ?></p>                        
                    </div>
                 </div>  
                 <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Your Personality :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                            
                            <?php 
                                     $arr=array('1'=>'Easy Going  ',
                                      '2'=>'Fun & Playful ',
                                      '3'=>'Shy  ',
                                      '4'=>'Intellectual ',
                                      '5'=>'Quiet ',
                                      '6'=>'Talkative ',
                                     
                                      );
                              
                                      if(isset($detail->client_personality))
                                      {
                                            $d_r = explode(',', $detail->client_personality);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                            ?>  
                        </p>                        
                    </div>
                 </div>  
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Other :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_personality_other; ?></p>                        
                    </div>
                 </div> 
                 
                 <hr>
                 
                  <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Experience :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">                            
                            <?php 
                                     $arr=array('1'=>'First time  ',
                                      '2'=>'Newbie ',
                                      '3'=>'Once in awhile   ',
                                      '4'=>'Frequently ',
                                      '5'=>'Hobbyist  ',
                                      );
                              
                                      if(isset($detail->client_experience))
                                      {
                                            $d_r = explode(',', $detail->client_experience);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>                        
                        </p>                        
                    </div>
                 </div>
                 
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Comments :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_experience_comment; ?></p>                        
                    </div>
                 </div> 
                 <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Session preferences :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">                            
                            <?php 
                                     $arr=array('1'=>'FS  ',
                                      '2'=>'FBSM ',
                                      '3'=>'Once in awhile  ',
                                      '4'=>'Dinner companion  ',
                                      '5'=>'Dirty talk  ',
                                      '6'=>'MSOG',
                                      '7'=>'LFK ',
                                      '8'=>'DFK', 
                                      '9'=>'BBBJ',
                                      '10'=>'CBJ ',
                                      '11'=>'GFE ',  
                                          '12'=>'DATY ',  
                                          '13'=>'PSE ',  
                                          '14'=>'GREEK ',  
                                          '15'=>'Foot fetish ',
                                         '16'=>'Russian  ',
                                         '17'=>'CIM  ',
                                         '18'=>'Doubles  ',
                                         '19'=>'BDSM   ',
                                      );
                              
                                      if(isset($detail->client_session_preferences))
                                      {
                                            $d_r = explode(',', $detail->client_session_preferences);
                                            foreach ($arr as $key => $value)
                                            {
                                                if(in_array($key,$d_r))
                                                {
                                                    echo $value ."<br> ";
                                                }
                                            }
                                      }
                              ?>                        
                        </p>                        
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Other :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_session_preferences_other; ?></p>                        
                    </div>
                 </div> 
                 <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Hobbies/interest  :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_hobbies_interest; ?></p>                        
                    </div>
                 </div> 
                 <hr>
                 <div class="form-group">
                    <label class="col-sm-4 control-label label_left">More about you  :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"><?php echo $detail->client_more_about_you; ?></p>                        
                    </div>
                 </div> 
                 <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label label_left">Profile Pic :</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">
                            <img width="30%" class="img-rounded" src="<?php echo HTTP_CLIENT_IMAGES_PATH.$detail->client_profile_pic.$detail->client_pic_ext;  ?>" />
                        </p>                        
                    </div>
                </div>  
                <hr>
            </form>

        </div>
    </div>
</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>