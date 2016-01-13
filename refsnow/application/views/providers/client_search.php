<section class="client_search_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading">Client Search</div>
        <form name="client_search_form" action="<?php echo base_url().'provider/client_search_listing/'; ?>" method="post" id="client_search_form">
            <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
             <div class="search_container"> 
             
             <div class="search_container_inner"> 
                    
                     <div class="text_field"><span class="field_title">First Name</span><input type="text" placeholder="First name" name="first_name" id="first_name" ></div>
                     <div class="text_field"><span class="field_title">Last Name</span><input type="text" placeholder="Last name" name="last_name" id="last_name" ></div>
                     <div class="text_field"><span class="field_title">Email 1</span> <input type="text" placeholder="Email 1" name="email1" id="email1" ></div>
                     <div class="text_field"><span class="field_title">Email 2 </span> <input type="text" placeholder="Email 2" name="email2" id="email2" ></div>
                     <div class="text_field"><span class="field_title">Email 3 </span> <input type="text" placeholder="Email 3" name="email3" id="email3" ></div>
                     <div class="text_field"><span class="field_title">Phone 1 </span> <input type="text" placeholder="Phone 1" name="phone1" id="phone1" ></div>
                     <div class="text_field"><span class="field_title">Phone 2 </span> <input type="text" placeholder="Phone 2" name="phone2" id="phone2" ></div>
                     <div class="text_field"><span class="field_title">Phone 3 </span> <input type="text" placeholder="Phone 3" name="phone3" id="phone3" ></div>
                     <div class="text_field"><span class="field_title">Ter Handle </span> <input type="text" placeholder="Ter Handle" name="ter_handle" id="ter_handle" ></div>
                     <div class="text_field"><span class="field_title">PF411 Id</span> <input type="text" placeholder="PF411 Id" name="pf411_id" id="pf411_id" ></div>
                     <div class="text_field"><span class="field_title">DateCheck Handle </span> <input type="text" placeholder="DateCheck Handle" name="datecheck_handle" id="datecheck_handle" ></div>
                     <div class="clear"></div>
                     <input type="submit" class="search_submit" value="Search" name="search_submit" id="search_submit" />
             </div>
            </div>
        </form>
        
        <div class="add-space">&nbsp;</div>
    </div>
</section>
