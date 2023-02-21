

<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
<thead>
										<tr>
											<th>SL No</th>
											<th>Station</th>
											<th>Category</th>
											<th>Issue Type</th>
											<th>Priority</th>
											<th>Notes</th>
											<th>Images</th>
											<th>Status</th>
											
										</tr>

									</thead>
									<tbody>
       
		                              <?php $i=0; foreach($data['list'] as $row){ $i++; ?>

									  
                                          <tr id="trrow{{$row->id}}">
											<td>{{$i}}</td>
											<td>{{$row->station_name}}</td>
											<td>{{$row->category_name}}</td>
											<td>{{$row->issue_type}}</td>
											<td>{{$row->priority}}</td>
											<td>{{$row->notes}}</td>
											<td><?php $obj = $row->images;
$stringify = json_decode($obj,true);
foreach ($stringify as $key => $value) {
if($stringify!=""){ ?>    
    <a href="<?php echo $value["imgname"] ?>"  target="_blank"><img src="<?php echo $value["imgname"] ?>" style="width:30px;height: 30px;margin-top: 10px" ></a>
												
 <?php } } ?></td>	
											<td>{{$row->status}}</td>	


												
										
											
										</tr>

                                    <?php } ?>
										
									  
                                         
										
									</tbody>
													</table>

<script type="text/javascript">

$(document).ready( function () {

    //$('#m_table_2').DataTable();
    $('#m_table_2').DataTable( {
        "scrollX": true
    });
});
</script>
