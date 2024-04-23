          
        <!-- Content Start -->
        <div class="content">
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-12 col-xl-6">
				               
                            <h3 class="mb-4">Database</h3>
						    <center>
                            <table class="table table-dark">
                              <thead>
                                    <tr>
                                         <th>Organ id</th>
                                         <th>Request info</th>
										 <th>Requesting Organ</th>
										 <th>Requested date</th>
										 <th>Status</th>
                                         <th>Location</th>
										 <th>Remove</th>
										 
                                    </tr>
                                </thead>
                                <tbody>
											<?php 
												foreach($userlist as $user){
													$statusarray=array("1"=>"active","2"=>"inactive")
											?>
                                            <tr>
                                            
                                                <td><?php echo $user->OG_Id;?></td>
                                                <td><?php echo $user->Request_Info;?></td>
                                                <td><?php echo $user->Organ_Info;?></td>
                                                <td><?php echo $user->Requested_Date;?></td>
												<td><?php echo $statusarray[$user->Status]?></td>
												<td><?php echo $user->Location;?></td>
													<td>
                                                 <a href="<?=base_url();?>Managerequest/remove/<?php echo $user->OG_Id;?>">
												 <i class="bi bi-trash"></i></a>
												  </td>
                                            </tr>
                                        
											<?php
												}
											?>
                                </tbody>
                              </table>
							</center>
                    </div>
               
                </div>
            </div>
            <!-- Table End -->
