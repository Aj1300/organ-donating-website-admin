          
        <!-- Content Start -->
        <div class="content">
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">Database</h3>
						    <center>
                            <table class="table table-dark">
                              <thead>
                                    <tr>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Address</th>
                                         <th>Phonenumber</th>
                                    </tr>
                                </thead>
                                <tbody>
											<?php 
												foreach($userlist as $user){
											?>
                                            <tr>
                                                <td><?php echo $user->US_Name;?></td>
                                                <td><?php echo $user->US_Email;?></td>
                                                <td><?php echo $user->US_Address;?></td>
                                                <td><?php echo $user->US_Phone;?></td>
                                                
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
            </div>
            <!-- Table End -->
