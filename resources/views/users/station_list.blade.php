


<option value="">Select Station</option>
<?php 
                                                                         foreach($data['station_list'] as $row){ ?>
                                                                         	  <option value="{{$row->id}}">{{$row->station_name}}</option>


                                                                       <?php  } ?>
								