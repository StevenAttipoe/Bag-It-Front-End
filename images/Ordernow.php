<a href="javascript:void(0)" id="button" class="button" onclick="showModal()">Confirm order</a> 

                <!-- Modal Section -->
                <div id="bg-modal" class="bg-modal" style="">

				<!-- order form section -->
                    <div class="modal-contents">
                        <div class="close" onclick="document.getElementById('bg-modal').style.display = 'none';">+</div>
                        <form name="Form" action="cart.php" method="POST" onsubmit = "return validateForm()">
                            <label for ="fname">First Name</label>
                            <input id="fname" name="fname" type="text" placeholder="First Name" required>
                            <label for ="lname">Last Name</label>
                            <input id="lname" name="lname" type="text" placeholder="Last Name" required>
                            <label for ="number">Phone Number</label>
                            <input id="number" name="number" type="tel" placeholder="Phone Number" required>
                            <label for = "email">Email Address</label>
                            <input id="email" name="email" type = "email" placeholder = "email">
							<label for = "email">House Address</label>
                            <input id="house-address" name="house-address" type = "text" placeholder = "Street name, House No." required>
                            <label for = "ddate">Delivery Date</label>
                            <input id="ddate" name="ddate" type = "date" placeholder = "Delivery date" required>
							<input type="hidden" id="product-tracker" name="product-tracker" value="" />
							<input type="submit" class="order-btn" value="ORDER NOW" name="order" /> 
						</form>
                    </div>
                </div>
				
            </div>