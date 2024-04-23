 <!-- Content Start -->
        <div class="content">
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                 
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">EDIT</h6>
							<form action="<?=base_url();?>manageuser/save" method="Post" id ="manageuser">
							 <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name"id="floatingInput" name="name"
                                    placeholder="name" value="<?php echo $data['US_Name']; ?>">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" id="email" name="email"
                                    placeholder="name@example.com" value="<?php echo $data['US_Email']; ?>">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" id="password" name="password"
                                    placeholder="Password" value="<?php echo $data['US_Password']; ?>">
                                <label for="floatingPassword">Password</label>
                            </div>
							 <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="address" name="address"
                                    id="floatingTextarea" style="height: 150px;"><?php echo $data['US_Address'];?></textarea>
                                <label for="floatingTextarea">Address</label>
                            </div><br>
							 <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['US_Phone']; ?>"
                                    placeholder="phone" >
                                <label for="floatingInput">phone number</label>
                            </div>
                           
					             <input type="hidden" id="US_Id" class="form-control" name="US_Id"  value="<?php echo $data['US_Id']; ?>">
                                 <button type="submit">Submit</button>
                                 <button>Cancel</button>
                           </form>
                        </div>
                    </div>
                    
                   
                 
                   
                </div>
            </div>
            <!-- Form End -->


     