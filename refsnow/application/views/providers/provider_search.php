<section class="client_search_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading">Provider Search</div>
        <form name="client_search_form" action="<?php echo base_url().'provider/provider_search_listing/'; ?>" method="post" id="client_search_form">
            <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
             <div class="search_container">
             <div class="search_container_inner">                     
                     <div class="text_field"><span class="field_title">First Name</span><input type="text" placeholder="First name" name="pu_user_fname" id="pu_user_fname" ></div>
                     
                     <div class="text_field"><span class="field_title">Email 1</span> <input type="text" placeholder="Email 1" name="email1" id="pu_user_email" ></div>
                     <div class="text_field"><span class="field_title">Email 2 </span> <input type="text" placeholder="Email 2" name="email2" id="pu_user_email2" ></div>
                     
                     <div class="text_field"><span class="field_title">Phone 1 </span> <input type="text" placeholder="Phone 1" name="phone1" id="pu_user_phone" ></div>
                     <div class="text_field"><span class="field_title">Phone 2 </span> <input type="text" placeholder="Phone 2" name="phone2" id="pu_user_phone2" ></div>
                     
                     <div class="text_field"><span class="field_title">Ter Handle </span> <input type="text" placeholder="Ter Handle" name="pu_user_terID" id="pu_user_terID" ></div>
                     <div class="text_field"><span class="field_title">PF411 ID</span> <input type="text" placeholder="PF411 Id" name="pu_user_pf11ID" id="pu_user_pf11ID" ></div>
                     <div class="text_field"><span class="field_title">DateCheck Handle </span> <input type="text" placeholder="DateCheck Handle" name="pu_user_datecheckID" id="pu_user_datecheckID" ></div>
                     
                     <div class="clear"></div>
                     <input type="submit" class="search_submit" value="Search" name="search_submit" id="search_submit" />
             </div>
            </div>
        </form>        
        <div class="add-space">&nbsp;</div>
    </div>
</section>
