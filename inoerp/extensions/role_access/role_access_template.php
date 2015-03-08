<div class="row small-left-padding">
 <div id ="form_header"><?php $f = new inoform(); ?>
  <span class="heading"><?php echo gettext('Role Details') ?></span>
  <div class="tabContainer">
   <ul class="column header_field">
    <li><?php $f->l_select_field_from_object('role_code', role_access::roles(), 'option_line_code', 'option_line_value', $role_code_h, 'role_code'); ?>
     <a name="show" href="form.php?class_name=role_access&<?php echo "mode=$mode"; ?>" class="show document_id role_access_id">
      <i class="fa fa-refresh"></i></a> 
    </li>						
    <li><?php $f->l_text_field('role_code', $role_code_h, '', 'role_code', '', '', 1) ?></li>
    <li><?php $f->l_text_field('description', $role_code_description, '50', 'description', '', '', 1); ?></li>
   </ul>
  </div>
 </div>
 <form action=""  method="post" id="role_access"  name="role_access">
  <!--END OF FORM HEADER-->
  <div id ="form_line" class="role_access">
   <span class="heading"><?php echo gettext('Class & Access Details') ?></span>
   <div id="tabsLine">
    <ul class="tabMain">
     <li><a href="#tabsLine-1"><?php echo gettext('Class Access') ?></a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsLine-1" class="tabContent">
      <table class="form_table">
       <thead> 
        <tr>
         <th><?php echo gettext('Action') ?></th>
         <th><?php echo gettext('Role Access Id') ?></th>
         <th><?php echo gettext('Class/Object Name') ?>#</th>
         <th><?php echo gettext('Access Level') ?></th>
        </tr>
       </thead>
       <tbody class="form_data_line_tbody role_access_values" >
        <?php
        $count = 0;
        foreach ($role_access_object as $role_access) {
         ?>         
         <tr class="role_access<?php echo $count ?>">
          <td>    
           <ul class="inline_action">
            <li class="add_row_img"><img  src="<?php echo HOME_URL; ?>themes/images/add.png"  alt="add new line" /></li>
            <li class="remove_row_img"><img src="<?php echo HOME_URL; ?>themes/images/remove.png" alt="remove this line" /> </li>
            <li><input type="checkbox" name="line_id_cb" value="<?php echo htmlentities($$class->role_access_id); ?>"></li>           
            <li><?php echo form::hidden_field('role_code', $role_code_h); ?></li>
           </ul>
          </td>
          <td><?php form::number_field_drs('role_access_id') ?></td>
          <td><?php echo $f->select_field_from_object('obj_class_name', engine::find_all(), 'obj_class_name', 'obj_class_name', $$class->obj_class_name, '', '', 1); ?></td>
          <td><?php echo $f->select_field_from_array('access_level', role_access::$access_map, $$class->access_level); ?></td>
         </tr>
         <?php
         $count = $count + 1;
        }
        ?>
       </tbody>
      </table>
     </div>
    </div>

   </div>
  </div> 
 </form>
</div>

<div class="row small-top-margin">
 <div id="pagination" style="clear: both;">
  <?php echo $pagination->show_pagination(); ?>
 </div>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="primary_column_id" data-primary_column_id="role_code" ></li>
  <li class="lineClassName" data-lineClassName="role_access" ></li>
  <li class="line_key_field" data-line_key_field="obj_class_name" ></li>
  <li class="single_line" data-single_line="false" ></li>
  <li class="form_line_id" data-form_line_id="role_access" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docLineId" data-docLineId="role_access_id" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="trClass" data-trclass="role_access" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="1" ></li>
 </ul>
</div>