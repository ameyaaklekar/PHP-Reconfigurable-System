<h2>Customer Master</h2>
      <hr /><div class="form-inline" style="margin-bottom: 20px;">
          <div class="form-group">
            <label for="cid">ID</label>
            <input type="text" class="form-control" name="cid" id="cid" placeholder="ID">
          </div>
          
          <div class="form-group">
            <label for="cfname">First Name</label>
            <input type="text" class="form-control" name="cfname" id="cfname" placeholder="First Name">
          </div>
          
          <div class="form-group">
            <label for="clname">Last Name</label>
            <input type="text" class="form-control" name="clname" id="clname" placeholder="Last Name">
          </div>
          
          <div class="form-group">
            <label for="ceid">Employee ID</label>
            <input type="text" class="form-control" name="ceid" id="ceid" placeholder="Employee ID">
          </div>
          
</div>
<div class="form-inline" style="margin-bottom: 20px;">
          <div class="form-group">
            <label>Type</label>
            <div class="radio">
              <label>
                <input type="radio" name="ctype" id="cash" value="Cash"> Cash
              </label>
            </div>
          </div>
          <div class="form-group">
            <label></label>
            <div class="radio">
              <label>
                <input type="radio" name="ctype" id="credit" value="Credit"> Credit
              </label>
            </div>
          </div>
</div>
<div class="form-group">
  <div class="btn-group" role="group">
          <button type="button" class="btn btn-primary" value="Add" onclick="addCustomer()">Add</button>
          <button type="button" class="btn btn-primary" value="Delete" onclick="deleteCustomer()">Delete</button>
          <button type="button" class="btn btn-primary" value="Update" onclick="updateCustomer()">Update</button>
          <button type="button" class="btn btn-primary" value="Search" onclick="searchCustomer()">Search</button>
          <button type="button" class="btn btn-primary" value="View All" onclick="viewAllCustomers()">View All</button>
  </div>
</div>