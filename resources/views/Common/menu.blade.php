<style>
#m_aside_left
{
   background: #180740 !important; 
}
    
</style>
					
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<?php 
							 $act_or_not='m-menu__item--submenu';  
							if($data['currentRouteName']=='Home'){
							   $act_or_not='m-menu__item--active';}
							?>
							<li class="m-menu__item   {{$act_or_not}}" aria-haspopup="true"><a href="{{route('Home')}}"class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph" <?php if ($act_or_not!="m-menu__item--active") {?>style="color: white;"<?php } ?>></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text" <?php if ($act_or_not!="m-menu__item--active") {?>style="color: white;"<?php } ?>>Dashboard</span>
							<!-- <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span>  -->
						</span></span></a>
						   </li>

							<li class="m-menu__section ">
								<h4 class="m-menu__section-text" style="color: white;">Components</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
						
						
						
						



<?php foreach($data['parent_menu'] as $row){
	
	$act_or_not='m-menu__item--submenu';
	if($row->p_menu_name!='Home'){
if (strpos($data['permissionparent'], ','.$row->id.',') !== false) {?>

<?php $icon='flaticon-layers';?>
<?php  if($row->p_menu_name=='Dashboard'){ $icon='flaticon2-protection'; } ?>
<?php  if($row->p_menu_name=='Category'){ $icon='flaticon2-hospital'; } ?>

<?php  if($row->p_menu_name=='User'){ $icon='flaticon-users'; } ?>
<?php  if($row->p_menu_name=='Roles'){ $icon='flaticon-user-settings'; } ?>
<?php  if($row->p_menu_name=='Menu'){ $icon='flaticon-menu-button'; } ?>
<?php  if($row->p_menu_name=='Survey'){ $icon='flaticon-folder-1'; } ?>
<?php  if($row->p_menu_name=='FMR'){ $icon='flaticon-plus'; } ?>
<?php  if($row->p_menu_name=='Station'){ $icon='flaticon-location'; } ?>
<?php  if($row->p_menu_name=='Permission'){ $icon='flaticon-settings'; } ?>

	

<?php $i=0;  foreach($data['sub_menu'] as $row1){
	if($row->id==$row1->parentmenu_id){ $i++; 
		 $route=$row1->s_menu_route;
		

	}?>
<?php }  

if( $data['currentRouteName']==$row->p_menu_name){
$act_or_not='m-menu__item--active';
}

?>



<?php if($i==1){ 

	?>
		

		<li class="m-menu__item  {{$act_or_not}}" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="{{route($route)}}"class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon {{$icon}}" <?php if ($act_or_not!="m-menu__item--active") {?>style="color: white;"<?php } ?>></i><span class="m-menu__link-text" <?php if ($act_or_not!="m-menu__item--active") {?>style="color: white;"<?php } ?>><?php echo $row->p_menu_name;?></span></a></li>


<?php }else{ ?>

	<li class="m-menu__item {{$act_or_not}}" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon {{$icon}}" style="color: white;"></i><span class="m-menu__link-text" style="color: white;"><?php echo $row->p_menu_name;?></span></a>

<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">


<?php  foreach($data['sub_menu'] as $row1){
	if($row->id==$row1->parentmenu_id){
	  $route=$row1->s_menu_route;
	

	 ?>
<li class="m-menu__item " aria-haspopup="true"><a  href="{{route($route)}}"class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"><?php echo $row1->s_menu_name;?></span></a></li>



<?php } } ?>
										
											
										


</ul>
								</div>
								</li>


<?php }?>











<?php  } } } ?>











					
					
					
						
							<!-- <li class="m-menu__section ">
								<h4 class="m-menu__section-text">Development</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<?php 
							 $act_or_not='m-menu__item--submenu';  
							if( $data['currentRouteName']=='Menu'){
							   $act_or_not='m-menu__item--active';}
							?>
							<li class="m-menu__item  {{$act_or_not}}" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="{{route('Menu')}}" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-menu-button"></i><span class="m-menu__link-text">Menu</span></a>
							
							</li> -->
						
						
						</ul>
					</div>
