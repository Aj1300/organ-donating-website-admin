 <!-- Content Start -->
        <div class="content">
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                 
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Donor add</h6>
							<form action="<?=base_url();?>manageconnection/save" method="Post" id ="manageconnection">
							 <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name"id="floatingInput" name="name"
                                    placeholder="name">
                                <label for="floatingInput">Donor name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" id="donororgan" name="donororgan"
                                    placeholder="organ you are donating">
                                <label for="floatingInput">organ</label>
                            </div>
                            <div class="form-floating mb-3">
								 <select class="form-select form-select-sm mb-3" id="status" name="status" aria-label="select your status">
                                <option selected>Status</option>
                                <option value="1">active</option>
                                <option value="2">inactive</option>
                            </select>
                            </div>
							 <div class="form-floating">
                                <textarea class="form-control" placeholder="add your location" id="location" name="location"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Location</label>
                            </div><br>
							
                           
					             <input type="hidden" id="DO_Id" class="form-control" name="DO_Id" >
                                 <button type="submit">Submit</button>
                                 <button>Cancel</button>
                           </form>
                        </div>
                    </div>
                    
                   
                 
                   
                </div>
            </div>
            <!-- Form End -->


     