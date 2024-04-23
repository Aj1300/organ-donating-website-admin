          
        <!-- Content Start -->
        <div class="content">
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
				
                   <div class="col-sm-12 col-xl-6">  
				   
								<a href ="<?=site_url();?>manageconnection/insert/">
								<button class ="btn btn-primary rounded-pill m-2" type ="button" style ="Float:right;">Add donor</button>
								</a>
						
                            <h3 class="mb-4">Database</h3>
						   
                            <table class="table table-dark">
                              <thead>
                                    <tr>
                                         <th>donor id</th>
                                         <th>Donation info</th>
                                         <th>Donating organ</th>
										 <th>Status</th>
                                         <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
											<?php 
												foreach($userlist as $user){
                                                $statusarray=array("1"=>"active","2"=>"inactive")
											?>
                                            <tr>                                               
                                                <td><?php echo $user->Do_Id;?></td>
                                                <td><?php echo $user->Donation_Info;?></td>
                                                <td><?php echo $user->Donating_Organ;?></td>
												<td><?php echo $statusarray[$user->Status]?></td>
												<td><?php echo $user->Location;?></td>
                                            </tr>
											<?php
												}
											?>
                                </tbody>
                              </table>
                    </div>
               
                </div>
            </div>
            <!-- Table End -->	
